<?php
/*@author Nikki Kang <nkang@transplantnet.org>
* @description This is the Entry class for the network contact management app, Netwerk. An
* entry is a contact (row); its property is the contact's information (e.g. name, email).
* When a user adds a contact, a new Entry is made, and each user has her own array of entries.
*/

class Entry {
  /*$info: an array that will hold the contact's info, set by user, with labels (e.g. name, email)
  * as keys and values as the corresponding info
  */
  private $info = array();

  /*constructor
  * @param string $firstName
  */
  public function __construct($firstName) {
    this->$info['firstName'] = $firstName;
  }

  /*@param string $field label of the info to be added/modified (column in the sheet)
  * @param string $val the info
  */
  public function setInfo($field, $val) {
    this->$info[$field] = $val;
  }

  /*@param string $field label of the info wanted (like name, email)
  * @return string the info wanted
  */
  public function getInfo($field) {
    if (isset(info[$field])) {
      return info[$field];
    }
    else {
      return NULL;
    }
  }



}

?>
