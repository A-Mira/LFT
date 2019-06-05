<?php
  include("includes/checksession.php");
  include("includes/funciones.php");
  include("includes/config.php");
  include("includes/topbar.php");

  $tabla_seguidos = mysqli_query($conn, "SELECT id_followed FROM user_follow WHERE id_follower = $self");
  $seguidos = [];
  if(mysqli_num_rows($tabla_seguidos) > 0){
    while ($datos = mysqli_fetch_array($tabla_seguidos)) {
      $seguidos[sizeof($seguidos)] = $datos[0];
    }
    $seguidos = implode(",", $seguidos);

    $tabla_posts = mysqli_query($conn, "SELECT * FROM post WHERE id_autor IN ($seguidos) ORDER BY date DESC");
    if(mysqli_num_rows($tabla_posts) > 0){
      while ($post = mysqli_fetch_array($tabla_posts)) {
        loadpost($conn, $post);
      }
    }
  }
?>
