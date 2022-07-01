<?php

use Models\User;

User::deleteUserFromSession();
header('Location: /');
