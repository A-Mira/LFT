<!DOCTYPE html>

<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Home / LFT</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

  <?php
  include("includes/checksession.php");
  include("includes/funciones.php");
  include("includes/config.php");
  include("includes/topbar.php");

  $tabla_seguidos = mysqli_query($conn, "SELECT id_followed FROM user_follow WHERE id_follower = $self");
  $seguidos = [$self];
    while ($datos = mysqli_fetch_array($tabla_seguidos)) {
      $seguidos[sizeof($seguidos)] = $datos[0];
    }
    $seguidos = implode(",", $seguidos);
    ?>
    <div class="row">
      <div class="col s6 offset-s1">
          <?php include "compose.php"; ?>
        </div>
        <?php
        $tabla_posts = mysqli_query($conn, "SELECT * FROM post WHERE id_autor IN ($seguidos) ORDER BY date DESC");
        if(mysqli_num_rows($tabla_posts) > 0){
          while ($post = mysqli_fetch_array($tabla_posts)) {
            loadpost($conn, $post);
          }
        }
      ?>
    </div>
    <div style="position: sticky; top: 0;" class="col s3 offset-s1">
      <?php include "whoami.php"; ?>
    </div>
  </div>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
