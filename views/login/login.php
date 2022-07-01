<?php
require_once 'views/_partials/header.php';
?>
    <div class="work_blok">
        <form action="" id="form_auth">
            <table class="form">
                <caption id="zagolovok_tablici">Авторизация</caption>
                <tr>
                    <td class="label">Login:</td>
                    <td><input type="text" id="login" required="required" class="input"></td>
                    <td class="error" id="error_login"></td>
                </tr>
                <tr>
                    <td class="label">Password:</td>
                    <td><input type="Password" id="password" required="required" class="input"></td>
                    <td class="error" id="error_password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="sub_auth" value="Авторизация" class="input_sub" id="sub_auth"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

<script type="text/javascript" src="public/js/login.js"></script>