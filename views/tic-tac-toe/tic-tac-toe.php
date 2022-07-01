<?php
require_once 'views/_partials/header.php';

?>
<link rel="stylesheet" href="public/css/style-tic-tac.css">
<div class='body'>
        <h1 id='h1'>Привет <?php echo $_SESSION['login'] ?>! Сыграем?</h1>
        <div class='field'>
            <form action="">
                <table class='field'>
                    <tr class='tr'>
                        <td> <input type='submit' class='td' id='0' value=''></td>
                        <td> <input type='submit' class='td' id='1' value=''></td>
                        <td> <input type='submit' class='td' id='2' value=''></td>
                    </tr>
                    <tr class='tr'>
                        <td> <input type='submit' class='td' id='3' value=''></td>
                        <td> <input type='submit' class='td' id='4' value=''></td>
                        <td> <input type='submit' class='td' id='5' value=''></td>
                    </tr>
                    <tr class='tr'>
                        <td> <input type='submit' class='td' id='6' value=''></td>
                        <td> <input type='submit' class='td' id='7' value=''></td>
                        <td> <input type='submit' class='td' id='8' value=''></td>
                    </tr>
                    <tr>
                        <td colspan='2' class='td2'>Твой уровень:</td>
                        <td class='td2' id='level'><?php echo $_SESSION['level'] ?></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

<script type="text/javascript" src="public/js/tic-tac-toe.js"></script>

</html>
