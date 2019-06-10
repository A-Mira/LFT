<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Search / LFT</title>

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
  $q=$_GET['q'];
  $searchuser = mysqli_query($conn, "SELECT * FROM usuario WHERE username like '%$q%' OR nombre like '%$q%'");;

  $searchpost = mysqli_query($conn, "SELECT * FROM post WHERE text like '%$q%'");
  ?>
  <div class="row">
    <div style="border-bottom: 2px solid black; padding-bottom:10px; text-align: center" class="col s6 offset-s1">
      <?php while ($s_usuario = mysqli_fetch_array($searchuser)) {
        echo "<div class='col s2'>
          <a href='profile.php?p=$s_usuario[0]'>
            $s_usuario[3] <br/>
            @$s_usuario[1]
          </a>
        </div>";
      } ?>
    </div>
    <div style="border-bottom: 2px solid black; padding-bottom:10px; padding-top:20px;" class="col s6 offset-s1">
      <?php while ($s_post = mysqli_fetch_array($searchpost)) {
        loadpost($conn, $s_post);
      } ?>
    </div>
    <div style="position: sticky; top: 0;" class="col s3 offset-s1">
      <?php include "whoami.php"; ?>
    </div>
  </div>

  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
