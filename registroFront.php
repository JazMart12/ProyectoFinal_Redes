<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro - Pelicconnect</title>
  <style>
    /* Estilo general del fondo */
    body {
      background: url('img/fondo_signin.jpg') no-repeat center center fixed;
      background-size: cover;
      margin: 0;
      height: 100vh; /* Ocupa toda la altura de la pantalla */
      display: flex;
      align-items: center; /* Centra verticalmente */
      justify-content: center; /* Centra horizontalmente */
      position: relative;
      font-family: Arial, sans-serif;
    }

    /* Capa de oscurecimiento del fondo */
    body::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6); /* Oscurece la imagen de fondo */
      z-index: 0;
    }

    /* Contenedor del formulario */
    .form-container {
      position: relative;
      z-index: 1;
      max-width: 400px;
      width: 100%;
      padding: 2rem;
      background: #ffffff; /* Fondo blanco puro */
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
      text-align: left; /* Alineación del texto a la izquierda */
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #333;
      font-size: 1.8rem;
    }

    .form-group {
      margin-bottom: 1rem;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      color: #333;
      margin-bottom: 0.5rem;
    }

    .form-group input {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 1rem;
      box-sizing: border-box;
    }

    .form-group input:focus {
      outline: none;
      border-color: #0d6efd;
      box-shadow: 0 0 5px rgba(13, 110, 253, 0.5);
    }

    .btn-register {
      width: 100%;
      padding: 0.75rem;
      background-color: #e50914; /* Rojo similar al botón anterior */
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1rem;
      text-align: center;
      margin-top: 1rem;
    }

    .btn-register:hover {
      background-color: #c10812;
    }

    footer {
      text-align: center;
      color: #fff;
      position: absolute;
      bottom: 20px;
      width: 100%;
    }

    footer p {
      margin: 0;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <!-- Contenedor del formulario -->
  <div class="form-container">
    <h2>Registro</h2>
    <form action="registro.php" method="POST">
      <div class="form-group">
        <label for="user">Nombre de usuario</label>
        <input type="text" id="user" name="user" required>
      </div>
      <div class="form-group">
      <label for="pass">Contraseña</label>
      <input type="password"id="pass" name="pass" placeholder="Ingrese su contraseña" required>
      </div>
      <button type="submit" class="btn-register">Registrarme</button>
    </form>
  </div>

  <!-- Pie de página -->
  <footer>
    <p>&copy; 2024 Pelicconnect. Todos los derechos reservados.</p>
  </footer>
</body>
</html>
