<?php
  if (!isset($_SESSION["id"])) {
    header("location:index.php");
  }
  if (!isset($_GET["p"])) {
    header("location:home.html");
  }

  
?>
