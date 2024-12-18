<?php 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'Model.php';

class UserModel extends Model {
    
    private $first_name;
    private $last_name;
    private $user_name;
    private $email;
    private $passwd;

    //settings functions
    public function setFirstName($param) {
        $this->first_name = $param;
    }
    public function setLastName($param) {
        $this->last_name = $param;
    }
    public function setUserName($param) {
        $this->user_name = $param;
    }
    public function setEmail($param) {
        $this->email = $param;
    }
    public function setPasswd($param) {
        $this->passwd =  $param;
    }

    //getting functions
    public function getFirstName() {
        return $this->first_name;
    }
    public function getLastName() {
        return $this->last_name;
    }
    public function getUserName() {
        return $this->user_name;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPasswd() {
        return $this->passwd;
    }

    public function addUser() {
        return $this->setUser(
            $this->getFirstName(),
            $this->getLastName(),
            $this->getUserName(),
            $this->getEmail(),
            $this->getPasswd()
        );
    }
}

?>