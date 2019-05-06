<?php
  session_start();

  if (!isset($_SESSION["username"])) {
    header("location:login.php");
  }
?>

  <h1>Bienvenido, <?php echo $_SESSION["username"]; ?></h1>
<a href='logout.php'>Cierra sesión aquí</a>
