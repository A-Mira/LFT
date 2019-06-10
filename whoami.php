<?php
  //Vamos a hacer consultas para pedir los siguientes datos:
  //Nombre, username, numero de seguidores, número de seguidos, número de publicaciones.
  $perfil = mysqli_query($conn, "SELECT nombre, username FROM usuario WHERE ID = $self");
  $perfil = mysqli_fetch_array($perfil);
  $self_nombre = $perfil[0];
  $self_username = $perfil[1];

  $follows = mysqli_query($conn, "SELECT count(*) FROM user_follow WHERE id_follower = $self");
  $followers = mysqli_query($conn, "SELECT count(*) FROM user_follow WHERE id_followed = $self");
  $follows = mysqli_fetch_array($follows)[0];
  $followers = mysqli_fetch_array($followers)[0];

  $self_posts = mysqli_query($conn, "SELECT count(*) FROM post WHERE id_autor = $self");
  $self_posts = mysqli_fetch_array($self_posts)[0];
?>

  <div style="border-bottom: 1px solid black" class="row">

    <form class="search" action="search.php" method="get">

      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">search</i>
          <input id="icon_search" type="text" class="validate" name="q"/>
          <label for="icon_search">Search...</label>
        </div>
      </div>
      </form>



  </div>
  <div style='border-bottom: 1px solid black; font-size:20px' class='row info'>
    <p>
      <span><?php echo $self_nombre; ?></span>
      <span style="padding-left: 5px; font-size: 14px; color: silver"><?php echo "@$self_username"; ?></span>
    </p>
  </div>
  <div style='border-bottom: 1px solid black; font-size:20px' class="row stats">
    <p>
      <span>Seguidores: <?php echo $followers; ?></span>
      <span style="float: right"> Siguiendo: <?php echo $follows; ?></span>
    </p>
  </div>
  <div style='border-bottom: 1px solid black; font-size:20px' class="row num">
    <p>
      <span>Número de publicaciones: <?php echo $self_posts; ?></span>
    </p>
  </div>
  <div style='border-bottom: 1px solid black;' class="row about">
    <p style="text-align: justify">
      <span style="font-size:20px">Sobre el creador:</span><br/><br/>
      Alberto Mira Ternero es un Administrador de Sistemas nacido en Málaga al que le gusta programar en su tiempo libre.
      Creó este proyecto para presentarlo al final de sus estudios y lo ha publicado en <a href="http://github.com/A-Mira">GitHub</a>
      para que esté al alcance de cualquiera. <br/><br/>

      Sus planes para con este proyecto es ir mejorándolo con el tiempo para que tenga más contenido
      y llegue a alcanzar lo que pensó en un principio para éste cuando no tenía el nivel suficiente.
    </p>
  </div>
