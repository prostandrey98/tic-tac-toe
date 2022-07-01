<?php

use Models\User;
use Provider\Provider;
use Services\CheckForm;

$user = new User();
$user->setLogin(CheckForm::preparationData($_POST['login'], 'login'))->setPassword(CheckForm::preparationData($_POST['password'], 'password'));
CheckForm::checkLength($user->getLogin(), 6, 'login');
CheckForm::checkLength($user->getPassword(), 6, 'password');
CheckForm::checkPassword($user->getPassword(), $_POST['confirm_password']);
CheckForm::checkUnique($user->getLogin());
$user->setPassword(User::soltPassword($user->getPassword()));
$Provider = new Provider();
$Provider->writeUser($user);
User::writeUserInSession($user->getLogin());
