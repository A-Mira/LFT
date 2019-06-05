<?php
  include("includes/config.php");
  include("includes/checksession.php");
  include("includes/funciones.php");

  if (!isset($_GET['p'])) {
    $_GET['p']=$self;
  }
  $profile_id = $_GET['p'];

  $tabla_posts = mysqli_query($conn, "SELECT * FROM usuario WHERE ID LIKE '$profile_id'");

  $tabla_posts = mysqli_query($conn, "SELECT * FROM post WHERE id_autor = $profile_id ORDER BY date");
  while ($post = mysqli_fetch_array($tabla_posts)) {
    loadpost($conn, $post);
  }
?>
