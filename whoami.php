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
