<?php

namespace Services;

class Auth
{
    public const SESSION_KEY = 'login';

    public static function isAuth(): bool
    {
        return isset($_SESSION[static::SESSION_KEY]);
    }
}
