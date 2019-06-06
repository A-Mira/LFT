<?php
include("includes/config.php");

include("includes/checksession.php");
include("includes/funciones.php");

if (!isset($_GET['p'])) {
  $_GET['p']=$self;
}
$profile_id = $_GET['p'];
//Vamos a hacer consultas para pedir los siguientes datos:
//Nombre, username, numero de seguidores, número de seguidos, número de publicaciones.
$perfil = mysqli_query($conn, "SELECT nombre, username FROM usuario WHERE ID = $profile_id");
$perfil = mysqli_fetch_array($perfil);
$profile_nombre = $perfil[0];
$profile_username = $perfil[1];

$follows = mysqli_query($conn, "SELECT count(*) FROM user_follow WHERE id_follower = $profile_id");
$followers = mysqli_query($conn, "SELECT count(*) FROM user_follow WHERE id_followed = $profile_id");
$follows = mysqli_fetch_array($follows)[0];
$followers = mysqli_fetch_array($followers)[0];

$profile_posts = mysqli_query($conn, "SELECT count(*) FROM post WHERE id_autor = $profile_id");
$profile_posts = mysqli_fetch_array($profile_posts)[0];


$tabla_posts = mysqli_query($conn, "SELECT * FROM usuario WHERE ID LIKE '$profile_id'");

$tabla_posts = mysqli_query($conn, "SELECT * FROM post WHERE id_autor = $profile_id ORDER BY date  DESC");

?>

<!DOCTYPE html>

<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title> <?php echo $profile_nombre; ?> / LFT</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
  <?php
  include "includes/topbar.php";
  ?>
  <div class="row">
    <div class="col s6 offset-s1">
      <?php include "profileinfo.php";
      if ($profile_id == $self) include "compose.php"; ?>

      <?php
      while ($post = mysqli_fetch_array($tabla_posts)) {
        loadpost($conn, $post);
      }
      ?>
    <?php if ($profile_id == $self) echo "</div>"; ?>
    </div>

    <div style="position: sticky; top: 0;" class="col s3 offset-s1">
      <?php include "whoami.php"; ?>
    </div>
  </div>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
