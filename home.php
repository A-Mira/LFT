<?php
  session_start();

  if (!isset($_SESSION["id"])) {
    header("location:login.php");
  }
?>
<!-- Topbar -->
  <div style="background-color: #15421d; border-bottom: 1px black solid" class="row">
    <div class="col m2">
      <a href="home.php" class="waves-effect waves-light btn"><i class="material-icons left">home</i>HOME</a>
    </div>
    <div class="col m6" style="text-align: center">

    </div>
  </div>
<!-- Fin Topbar -->

  <h1>Bienvenido, <?php echo $_SESSION["id"]; ?></h1>
  
<a href='logout.php'>Cierra sesión aquí</a>
