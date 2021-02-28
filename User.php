<?php
    class User
    {
        public $username;
        public $password;

        function __construct($user, $pass){
            $this->username = $user;
            $this->password = $pass;
        }

        public function login(){
            return "$this->username telah berhasil login";
        }
    }
?>