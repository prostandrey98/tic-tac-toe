<?php

namespace Provider;

class Provider
{
    public $table;
    public $connection;

    function __construct(){
        $this->connection = self::GetConection();
        $this->table = 'users';
    }

    public function readUser($login){
        $sql = "SELECT `login`, `password`, `level` FROM $this->table WHERE login = '$login'";
        $query = $this->connection->query($sql);
        if ($query->num_rows == 0){
            return null;
        } else {
            $userDB = mysqli_fetch_assoc($query);
            return $userDB;
        }
    }

    public static function GetConection(){
        return require 'ConnectDataBase.php';
    }

    public function writeUser($user){
        $sql = "INSERT INTO $this->table (login, password) VALUES ('".$user->login."', '".$user->password."')";
        $query = $this->connection->query($sql);
    }

    public function levelUp($level, $login){
        $level++;
        $sql = "UPDATE $this->table SET level = '$level' WHERE login = '$login'";
        $query = $this->connection->query($sql);
    }

    public function levelDown($level, $login){
        $level--;
        $sql = "UPDATE $this->table SET level = '$level' WHERE login = '$login'";
        $query = $this->connection->query($sql);
    }
}
