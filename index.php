<?php

include_once __DIR__.'/vendor/autoload.php';
use Services\Auth;
use Services\Url;

session_start();

$url = Url::getInstance();

$publicRoutes = require 'routes/public.php';
$protectedRoutes = require 'routes/protected.php';

if (in_array($url->getUri(), $protectedRoutes)) {
    if (!Auth::isAuth()) {
        $url->setUri('/login');
    }
}

if (!in_array($url->getUri(), array_merge($publicRoutes, $protectedRoutes))) {
    http_response_code(404);

    exit();
}

require 'actions'.$url->getUri().'.php';
