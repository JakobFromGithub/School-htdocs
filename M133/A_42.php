<!DOCTYPE html>
<html>
  <head>
    <title>A_42</title>
  </head>
  <body>
    <form method="post">
      <input name="username" placeholder="username"/>
      <input name="password" placeholder="password"/>
      <button type="submit" > submit </button>
    </form>
  </body>
</html>
<?php
  $username = "admin";
  $password = "123";
  if(isset($_POST["username"]) && isset($_POST["password"])){
    if($_POST["username"] == $username && $_POST["password"] == $password){
      echo 'geheime Infos';
    }else{
      echo 'access denied';
    }
  }
?>
