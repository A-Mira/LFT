<?php
session_start();

include("includes/config.php");

	if (isset($_SESSION["id"])) {
		header("location:home.php");
	}

	if (isset($_POST['login'])) {
		$username = $_POST["username"];
		$password = md5($_POST["password"]);

		$tabla = mysqli_query($conn,"SELECT id, username, password FROM usuarios
			WHERE username LIKE '$username' AND password LIKE '$password'");

		$id = mysqli_fetch_array($tabla)[0]["id"];

		if (mysqli_num_rows($tabla) == 1) {
			$_SESSION["id"] = $id;
			echo "<script>window.location.replace('home.php')</script>";
		}else{
			echo "<script> alert('Usuario o contraseña incorrectos')</script>";
			echo "<script> window.location.replace('login.html')</script>";
		}
	}
?>
