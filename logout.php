<?php
  session_start();

  session_destroy();

  header("Location: indexAndres.php");
  setcookie("usuario",'',-1);
  exit;
?>