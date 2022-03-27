<?php 
class User {

    public function __construct(){
        $this->_usernames = " Test User";
    }
private $_usernames;
private $_passwords;
private $_id;

public function setUsernames($usernames) {
    $this->_usernames = $usernames;
}
public function setPasswords($passwords) {
    $this->_passwords = $passwords;
}
public function setId($id) {
    $this->_id = $id;
}
public function getId() {
    return $this->_id;
}     
public function getUsernames() {
    return $this->_usernames; 
}
public function getPasswords() {
    return $this->_passwords;
}
}
?>