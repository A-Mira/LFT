<?php
  include "includes/config.php";
  $action = $_GET['f'];
  $active = $_GET['a'];
  $passive = $_GET['p'];
  $url = $_GET['u'];

  if ($action == 1) { //insertar
    mysqli_query($conn, "INSERT INTO user_follow VALUES ($active, $passive)");
  } else { //borrar
    mysqli_query($conn, "DELETE FROM user_follow WHERE id_follower = $active AND id_followed = $passive");
  }
  echo "<script> window.location.replace('$url')</script>";
?>
