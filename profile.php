<?php
  include("includes/checksession.php");
  include("includes/funciones.php");

  if (!isset($_GET['p'])) {
    $_GET['p']=$self;
  }
?>
