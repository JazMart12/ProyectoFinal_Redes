<?php
    // Obtener credenciales del formulario
    $usuario = $_POST['user'];
    $contrasena = $_POST['pass'];

    // Construir la URL con los parámetros
    $url = "http://localhost:3000/registrarUsuario/$usuario/$contrasena";

    // Realizar la solicitud GET
    $response = file_get_contents($url);

    // Decodificar la respuesta
    if ($response === "true") {
        echo "Usuario registrado con exito..";
        sleep(4);
        header("Location: loginFront.php");
        exit;
    } else {
        echo "El usuario ya existe, elija otro nombre";
        sleep(4);
        header("Location: registroFront.php");
    }
?>