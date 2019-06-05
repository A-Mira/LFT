<!DOCTYPE html>

<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Log in to LFT</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

  <div class="row">
    <form class="col s6 offset-s4" method="post" action="compose.php">

      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <textarea id="compose" class="materialize-textarea" name="text"></textarea>
              <label for="compose">What are you thinking?</label>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="input-field col s4 offset-s2">
            <button class="waves-effect waves-light btn" type = "Submit" name = "post" >
              Post! <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
        <input id="url" name="url" type="hidden" value="<?php echo $_SERVER['REQUEST_URI'];?>"/>
      </form>
    </body>
    </html>
