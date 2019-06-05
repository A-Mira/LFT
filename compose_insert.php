<?php
  include "includes/config.php";
  include "includes/checksession.php";

  if ($_POST["post"]) {
    $text = $_POST["text"];
    $url = $_POST["url"];

    $insert = mysqli_query($conn, "INSERT INTO post (id_autor, text) VALUES ($self, '$text')");

    if (!$insert) {
      echo "<script>alert('Error en la creacion de tu publicación');</script>";
    }
  }
  header("location:$url");
?>
