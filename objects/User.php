<?php

//	  C o p y r i g h t   S M N   S h u v o 
//	  2 n d   Y e a r   C a p s t o n e   P r o j e c t   

/**
 * Description of User
 *
 * @author smnsh
 */
class User {
    var $userName;
    var $password;
    var $status;
    var $address;
    var $phone;
    var $email;
    

    function __construct($userName, $password, $status, $address, $phone, $email) {
        $this->userName = $userName;
        $this->password = $password;
        $this->status = $status;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
    }
    
    function getUserName() {
        return $this->userName;
    }

    function getPassword() {
        return $this->password;
    }

    function getStatus() {
        return $this->status;
    }

    function getAddress() {
        return $this->address;
    }

    function getPhone() {
        return $this->phone;
    }

    function getEmail() {
        return $this->email;
    }

    function setUserName($userName) {
        $this->userName = $userName;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setEmail($email) {
        $this->email = $email;
    }



    
}
