<?php
    session_start();
?>
<html>
<form action='login.php' method='POST'>
            <label for='user'>Usuario:</label><br>
            <input type='text' id='user' name='user' value=''><br>
            <label for='pass'>Contraseña:</label><br>
            <input type='text' id='pass' name='pass' value=''><br><br>
            <input type='submit' value='Crear usuario'>
        </form> 
</html>
