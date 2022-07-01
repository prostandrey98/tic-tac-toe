<?php

use Models\User;
use Services\Ajax;
use Services\CheckForm;

$user = new User();
$user->setLogin($_POST['login'])->setPassword(User::soltPassword($_POST['password']));
CheckForm::checkUser($user);
User::writeUserInSession($user->getLogin());

