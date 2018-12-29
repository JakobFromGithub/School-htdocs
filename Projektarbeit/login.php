<!DOCTYPE html>
<?php
  require("functions.php");
  session_start();
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login-Seite</title>
		<link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <nav>
      <?php displayNav(); ?>
    </nav>
    <?php
    if(isset($_SESSION['username'])){

        if(isset($_POST['deleteSession']) && $_POST['deleteSession'] == "true"){
  				_end();
          header('Location: login.php');
  			}
  			if(isset($_SESSION['username'])){
  				echo '
  				<form method="post" class="login center">
  					<p>Hallo ' . $_SESSION['username'] . ', willst du jetzt schon gehen?</p>
  					<button type="submit" name="deleteSession" value="true">ausloggen</button>
  				</form>';
  			}

      }else{

      $postUsername = "";
      $postPassword = "";

      if(isset($_POST['username'])){
        $postUsername = $_POST['username'];
      }
      if(isset($_POST['password'])){
        $postPassword = $_POST['password'];
      }

      echo'
        <form method="POST" action="edit.php" class="login center">
          <label>username</label>
          <input type="text" name="username" value="' . $postUsername . '" required/>
          <label>password</label>
          <input type="password" name="password" value="' . $postPassword . '" required/>
          <button type="submit" name="senden" class="fill-width">senden</button>
        </form>';
      }
    ?>
  </body>
</html>
