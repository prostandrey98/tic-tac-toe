<?php

namespace Services;

use Provider\Provider;

class CheckForm
{
    public static function preparationData($data, $var)
    {
        $data = trim($data);
        $data = htmlspecialchars($data);
        if (preg_match('|\\s|', $data)) {
            echo 'Присутствуют пробелы: '.$var;

            exit;
        }

        return $data;
    }

    public static function checkLength($data_check, $length, $var)
    {
        if (iconv_strlen($data_check) < $length) {
            echo 'Минимум '.$length.' символ(ов/а): '.$var;

            exit;
        }
    }

    public static function checkUnique($login_check_unique)
    {
        $Provider = new Provider();
        $data_file = $Provider->readUser($login_check_unique);
        if ($data_file != null) {
            echo 'Такой login уже занят: login';
            exit;
        }
    }

    public static function checkPassword($password, $confirm_password)
    {
        if ($password != $confirm_password) {
            echo 'Пароль не подтвержден: confirm_password';
            exit;
        }
    }

    public static function checkUser($user_auth)
    {
        $Provider = new Provider();
        $user_DB = $Provider->readUser($user_auth->getLogin());
        if ($user_DB == null) {
            echo 'Пользователь не найден: login';
            exit;
        }
        if ($user_DB["password"] != $user_auth->getPassword()) {
            echo 'Неверный пароль: password';
            exit;
        }
    }
}
