<?php
session_start();

include("includes/config.php");

	if (isset($_SESSION["id"])) {
		header("location:home.php");
	}

	if (isset($_POST['register'])) {
		$username = $_POST["username"];
		$password = md5($_POST["password"]);
    $nombre = $_POST["name"];
    $email = $_POST["email"];


		$tabla = mysqli_query($conn,"SELECT username FROM usuarios
			WHERE username LIKE '$username'");

		if (mysqli_num_rows($tabla) == 0) {
      $insert = mysqli_query($conn,"INSERT INTO usuarios (username, password, nombre, email)
      VALUES ('$username','$password','$nombre','$email')");
      if (!$insert) {
          echo "<script> alert('Error en la creación del usuario.')</script>";
          echo "<script>window.location.replace('register.html')</script>";
      }
      $tabla = mysqli_query($conn,"SELECT id FROM usuarios WHERE username LIKE '$username' AND password LIKE '$password'");
      if (mysqli_num_rows($tabla)==1) {
        $_SESSION['id']=mysqli_fetch_array($tabla)[0];
        echo "<script>window.location.replace('home.php')</script>";
      }else{
        echo "<script>window.location.replace('login.html')</script>";
      }

		}else{
			echo "<script> alert('Este usuario ya existe.')</script>";
			echo "<script> window.location.replace('register.html')</script>";
		}
	}else{
    header("location:register.html");
  }
?>
