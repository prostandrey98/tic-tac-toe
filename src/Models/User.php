<?php

namespace Models;

class User
{
    public $login;
    public $password;
    public $level;

    public function setLogin($login): User
    {
        $this->login = $login;

        return $this;
    }

    public function setPassword($password): User
    {
        $this->password = $password;

        return $this;
    }

    public function setLevel($level): User
    {
        $this->level = $level;

        return $this;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public static function soltPassword($password)
    {
        return md5($password.'this_is_my_salt');
    }

    public static function writeUserInSession($login)
    {
        $_SESSION['login'] = $login;
    }

    public static function deleteUserFromSession()
    {
        unset($_SESSION['login']);
    }
}
