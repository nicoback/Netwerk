<?php
class Connection {
  // Holds the database connection
  private $connect;

  private $dbHost = 'localhost';
  private $dbUsername = 'root';
  private $dbPassword = 'root';
  public $dbName = 'netwerk'

  /*
  * Creates connection to the db
  */
  public function __construct() {
    $this->connect = new mysqli($this->dbHost, $this->dbUsername,
    $this->dbPassword, $this->dbName);
    if ($this->connect->connect_error) {
      die('Connection error :(.');
    }
  }

  /*
  * Add a new row to the auth token table - called if user checks "remember me"
  *
  * @param string $selector a random token (stored in user cookie)
  * @param string $token a random token that is hashed (plaintext stored in user cookie)
  * @param integer $uid the user's id
  * @return bool succeed or fail
  */
  public function addAuthToken($selector, $token, $uid) {
    $result = false;
    $stmt = $this->connect->stmt_init();
    if ($stmt->prepare("INSERT INTO `auth_tokens` (`selector`,`token`,`uid`, `expires`) VALUES (?, ?, ?, NOW() + INTERVAL 10 WEEK)")) {
      $stmt->bind_param("ssi", $selector, $token, $uid);
      if ($stmt->execute()) {
        $result = true;
      }
    }
    $stmt->close();
    return $result;
  }

  /*
  * Grabs row from auth_table using selector from user's cookie as a lookup id
  *
  * @param string $selector a random token from user's cookie
  * @return bool|array the row, or false if there is no matching row
  */
  public function getAuthToken($selector) {
    $stmt = $this->connect->stmt_init();
    if (!($stmt->prepare("SELECT selector, token, uid FROM auth_tokens WHERE selector = ? AND expires > NOW() LIMIT 1"))) {
      $stmt->close;
      echo 'Error code 100: Please report to administrator.';
      return false;
    }
    $stmt->bind_param("s", $selector);
    if (!($stmt->execute()) {
      echo 'Error code 200: Please report to administrator.';
      $stmt->close;
      return false;
    }
    $result = array();
    $stmt->bind_result($result['selector'], $result['token'], $result['uid']);
    $stmt->fetch();
    $stmt->close;
    if (!empty($result)) {
      return $result;
    }
    return false;
  }

  ?>
