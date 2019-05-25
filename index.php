<?php
  session_start();
  include("includes/config.php");

  if (isset($_SESSION["id"])) {
    header("location:home.php");
  }
?>
  <h1>Bienvenido a LFT</h1>
  <br>
  <br>
  <a href='login.html'>Inicia sesión aquí</a>
