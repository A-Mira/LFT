<?php
session_start();

include("config.php");

	if (isset($_POST['login'])) {

		$username = htmlentities(mysqli_real_escape_string($conn, $_POST['username']));
		$pass = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));
		$select_user = "select * from users where username='$username' AND password='$pass' AND status='verified'";
		$query= mysqli_query($conn, $select_user);
		$check_user = @mysqli_num_rows($query);

		if($check_user == 1){
			$_SESSION['username'] = $username;

			echo "<script>window.open('home.php', '_self')</script>";
		}else{
			echo"<script>alert('Your Username or Password is incorrect')</script>";
		}
	}
?>

<!DOCTYPE html>

<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Log in to LFT</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

  <div class="row">
    <form class="col s6 offset-s3" method="post" action="">

      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_username" type="text" class="validate" name="username">
          <label for="icon_username">Username</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">lock_outline</i>
          <input id="icon_password" type="password" class="validate" name="password">
          <label for="icon_password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4 offset-s2">
          <button class="waves-effect waves-light btn" type = "Submit" name = "login" value = "login">
          Submit <i class="material-icons right">send</i>
        </button>
      </div>
    </div>
  </form>
</div>

<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
