<?php
require_once 'views/_partials/header.php';
?>
    <div class="work_blok">
        <form action="" id="form_registr">
            <table class="form">
                <caption id="zagolovok_tablici">Регистрация</caption>
                <tr>
                    <td class="label">Login:</td>
                    <td><input type="text" id="login" required="required" placeholder="min 6 символов" class="input"></td>
                    <td class="error" id="error_login"></td>
                </tr>
                <tr>
                    <td class="label">Password:</td>
                    <td><input type="Password" id="password" required="required" placeholder="min 6 символов" class="input"></td>
                    <td class="error" id="error_password"></td>
                </tr>
                <tr>
                    <td class="label">Confirm password:</td>
                    <td><input type="Password" id="confirm_password" required="required" class="input"></td>
                    <td class="error" id="error_confirm_password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="sub_registr" value="Регистрация" class="input_sub" id="sub_registr"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

<script type="text/javascript" src="public/js/registr.js"></script>
