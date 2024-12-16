<?php
session_start();
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #f8f9fa;
      }
      main {
        max-width: 400px;
        width: 100%;
        padding: 2rem;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      h1 {
        text-align: center;
        margin-bottom: 1.5rem;
        color: #333;
      }
      p {
        text-align: center;
        margin-top: 1rem;
      }
      .btn-primary {
        background-color: #0d6efd;
        border: none;
      }
      .btn-primary:hover {
        background-color: #0b5ed7;
      }
      .btn-danger {
        margin-top: 1rem;
      }
    </style>
  </head>
  <body>
    <main>
      <?php if (isset($_SESSION["usuario"])): ?>
        <!-- Sección de bienvenida y cerrar sesión -->
        <h1>Bienvenido <?php echo htmlspecialchars($_SESSION["usuario"]); ?>!</h1>
        <form action="logout.php" method="POST" class="text-center">
        </form>
      <?php else: ?>
        <!-- Formulario de inicio de sesión -->
        <h1>Iniciar sesión</h1>
        <form action="login.php" method="POST">
          <div class="mb-3">
            <label for="user" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="user" name="user" placeholder="Ingrese su usuario" required>
          </div>
          <div class="mb-3">
            <label for="pass" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="pass" name="pass" placeholder="Ingrese su contraseña" required>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="rememberMe">
            <label class="form-check-label" for="rememberMe">
              Acuérdame
            </label>
          </div>
          <button class="btn btn-primary w-100" type="submit">Iniciar sesión</button>
        </form>
        <p>
          ¿No tienes una cuenta? <a href="#" class="text-primary">Regístrate aquí</a>
        </p>
      <?php endif; ?>
      <p class="text-muted">&copy; 2017–2024</p>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>