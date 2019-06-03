<?php
  session_start();

  if (!isset($_SESSION["id"])) {
    header("location:login.php");
  }else{
    $self=$_SESSION["id"];
  }
?>
