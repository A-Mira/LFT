<?php
session_start();
include("includes/config.php");

if (isset($_SESSION["id"])) {
  header("location:home.php");
}
?>
<!DOCTYPE html>

<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Wellcome / LFT</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

  <div class="row" style="margin-top: 10%">
    <div class="col s5 offset-s3">
      <h1>Bienvenido a LFT</h1><br/>
      <div class="row">
        <a href='login.html'>Inicia sesión aquí</a>
      <span style="float: right"><a href='register.html'>¿Nuevo? ¡Regístrate!</a></span>

      </div>
    </div>

  </div>

  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
