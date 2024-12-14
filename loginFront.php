<main id="main">
    <?php
        if (isset($_SESSION["usuario"])) {
        echo "<p>Bienvenido ".$_SESSION["usuario"]."</p>";
        echo "<form action='logout.php'>
                <input type='submit' value='Cerrar Sesion'>
            </form>";
        }else{
        echo "<form action='login.php' method='POST'>
            <label for='user'>Usuario:</label><br>
            <input type='text' id='user' name='user' value=''><br>
            <label for='pass'>Contraseña:</label><br>
            <input type='text' id='pass' name='pass' value=''><br><br>
            <input type='submit' value='Iniciar Sesion'>
        </form> ";
        }
    ?>
</main>