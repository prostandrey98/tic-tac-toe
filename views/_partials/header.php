<?php
use Services\Auth;
use Services\Url;

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic-tac-toe</title>
</head>
<script type="text/javascript" src="public/js/jquery.js"></script>
<link rel="stylesheet" href="public/css/style.css">

<body>
    <div class="header">
        <table class="zagolovok_shapki">
            <tr>
                <td id="zagolovok_shapki1">Крестики-нолики</td>
                <td id="zagolovok_shapki2">
                <?php
                if (Auth::isAuth()) {?>
                    <a href="/logout" class="gipersilka">Выход</a>
                <?php } else {
                    if ('/registration' == Url::getInstance()->getUri()) {
                        ?><a href="/login" class="gipersilka">Авторизация</a><?php
                    } else {
                        ?><a href="/registration" class="gipersilka">Регистрация</a><?php
                    }
                }
                ?>
                </td>
            </tr>
        </table>
    </div>
 
        