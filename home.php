<?php
  include("includes/checksession.php");
  include("includes/funciones.php");
  include("includes/config.php");
?>
<!-- Topbar -->
  <div style="background-color: #15421d; border-bottom: 1px black solid" class="row">
    <div class="col m2">
      <a href="home.php" class="waves-effect waves-light btn"><i class="material-icons left">home</i>HOME</a>
    </div>
    <div class="col m6" style="text-align: center">
      <h2>LFT</h2><h3>.com</h3>
    </div>
  </div>
<!-- Fin Topbar -->

<?php

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
