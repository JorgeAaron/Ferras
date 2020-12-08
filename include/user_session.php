<?php

class UserSession{

    public function __construct(){
        session_start();
    }

    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }

    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }

    public function setRol($rol) {
        $_SESSION['rol'] = $rol;
    }

    public function getRol(){
        return $_SESSION['rol'];
    }
}

?>