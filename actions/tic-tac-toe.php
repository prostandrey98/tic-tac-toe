<?php

use Models\User;
use Provider\Provider;

$user = new User();
$Provider = new Provider();
$userDB = $Provider->readUser($_SESSION['login']);
$_SESSION['level'] = $userDB['level'];
require_once 'views/tic-tac-toe/tic-tac-toe.php';
