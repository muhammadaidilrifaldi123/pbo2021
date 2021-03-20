<?php
class User{
//atribut
    protected $username;
    protected $password;

    function __construct($username,$password){
        $this->username = $username;
        $this->password = $password;        
}    
    public function login(){
        return "$this->username berhasil login";
    }
    // setter
    public function setUsername($username){
        $this->nama=$username;
    }
    public function setPassword($password){
        $this->nama=$password;
    }
    // getter
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
}
?>