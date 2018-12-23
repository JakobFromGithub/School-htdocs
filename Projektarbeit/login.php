<!DOCTYPE html>
<?php
  //require("functions.php");
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login-Seite</title>
		<link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body class="colored-background">
    <form method="POST" action="edit.php" class="login center">
      <label>username</label>
      <input type="text" name="username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];} ?>" required/>
      <label>password</label>
      <input type="password" name="password" value="<?php if(isset($_POST['password'])){echo $_POST['password'];} ?>" required/>
      <button type="submit" name="senden" class="fill-width">senden</button>
    </form>
  </body>
</html>
