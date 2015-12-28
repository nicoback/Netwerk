<?php
class Session {

  public function __construct() {
    session_start();
  }

  private function hasSession() {
    return (isset($_SESSION['userIp']) && $_SESSION['userIp'] == $_SERVER['REMOTE_ADDR']
    && isset($_SESSION['userId']) && isset($_SESSION['lastPing'])
    && $_SERVER['REQUEST_TIME'] - $_SESSION['lastPing'] <= 7200);
  }

  /**
  * Checks if user has a valid login cookie
  * @param Connection the db connection object
  * @return bool|int user id if user is remembered, false if not
  */
  public function isRemembered($connection) {
    $value  = $_COOKIE['netwerk'];
    $pieces = explode("  ", $value); //separate selector [0] and validator [1]
    //Grab row in auth_tokens for given selector
    $tokenRow = $connection->getAuthToken($pieces[0]);
    if (!$tokenRow) {
      return false;
    }
    //Hash the validator stored in user's cookie
    $cookieToken = hash('sha256', $pieces[1]);
    //Compare the stored hash and the hash from cookie, follow through
    if (hash_equals($tokenRow['token'], $cookieToken)) {
      return $tokenRow['uid'];
    }
    //User is v sketch if this statement is reached: do something about it later
    return false;
  }

  //Login check
  public function loginCheck() {
    $currentTime = $_SERVER['REQUEST_TIME'];
    if (hasSession()) {
      $_SESSION['lastPing'] = $currentTime;
      return;
    }
    $rememberedUid = isRemembered();
    if (!$rememberedUid) {
      //TODO: user is NOT logged in
      session_destroy();
      header("location: /");
      exit();
    } else {
      //user is remembered; associate current session with user id
      setSession($rememberedUid);
    }
  }

  public function setSession($uid) {
    $_SESSION['userId'] = $uid;
    $_SESSION['userIp'] = $_SERVER['REMOTE_ADDR'];
    $_SESSION['lastPing'] = $_SERVER['REQUEST_TIME'];
  }

  /**
  * @param Connection the db connection object
  * Precondition: user has been logged in (session has been set)
  */
  public function remember($connection) {
    $selector =  bin2hex(mcrypt_create_iv(12, MCRYPT_DEV_URANDOM)); //acts as ID in DB table
    $validator = bin2hex(mcrypt_create_iv(12, MCRYPT_DEV_URANDOM));
    $token = hash('sha256', $validator); //will be stored in DB
    $value = $selector . '  ' . $validator; //delimiter will be two spaces
    if (!($connection->addAuthToken($selector, $token, $_SESSION['userId']))) {
      echo 'Error code 304: Please report this to the administrator.';
      return;
    }
    //Set the cookie
    setcookie('netwerk', $value, time() + 86400 * 56, '/');
  }
}
?>
