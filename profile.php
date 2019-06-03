<?php
  include("includes/checksession.php");
  include("includes/funciones.php");

  if (!isset($_GET['p'])) {
    $_GET['p']=$self;
  }
  $profile_id = $_GET['p']

  $tabla_posts = mysqli_query($conn, "SELECT * FROM post WHERE id_autor LIKE '$profile_id' ORDER BY fecha DESC");
  while ($post = mysqli_fetch_array($tabla_posts)) {
    loadpost($post);
  }
?>
