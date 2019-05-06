<?php
  session_start();
  include("config.php");
  if (isset($_SESSION["username"])) {
    header("location:home.php");
  }
?>
  <h1>Bienvenido a LFT</h1>
  <br>
  <br>
  <a href='login.php'>Inicia sesión aquí</a>
