<?php
namespace application;
class User{
    protected $username;
    protected $password;

function __construct($id,$pass){
    $this->username = $id;
    $this->password = $pass;
}

public function login(){
    return "$this->username Succesfully login into server.";
}

public function setUsername($username){
    $this->username = $username;
}

public function setPassword($password){
    $this->password = $password;
}

public function getUsername(){
    $this->username = $username;
}

public function getPassword(){
    $this->password = $password;
}

}
?>