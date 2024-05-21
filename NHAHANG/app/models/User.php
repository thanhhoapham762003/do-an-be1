<?php
class User extends Database
{
    function checkLogin($username, $password) {
        $sql = parent::$connection->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $sql->bind_param("ss", $username, $password);
        return parent::select($sql)[0];        
    }
}


