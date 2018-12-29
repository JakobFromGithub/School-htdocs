<?php

  // Everything DB related
  function readDB($sql) {
    $connection = mysqli_connect("localhost","root","","fotoblock");
    if($connection){
      $result = mysqli_query($connection, $sql);
      $connection->close();
    }
    return $result;
  }

  function writeDB($sql) {
    $connection = mysqli_connect("localhost","root","","fotoblock");
    if($connection){
      $connection->query($sql);
      $connection->close();
    }
  }

  function validateLogin($username, $password) {
    if($username != "" && $password != ""){
      $connection = mysqli_connect("localhost","root","","fotoblock");
      if($connection){
        $passwordHash = mysqli_query($connection, 'SELECT PASSWORD FROM `login` WHERE username = "'.$username.'"');
        $connection->close();

        if ($row = $passwordHash->fetch_assoc()) {                              //gibt Tabelle zurück!
          if(password_verify($password,$row['PASSWORD'])){
            return "true";
          }
        }
      }
    }
    return "false";
  }

  function _end() {
    session_unset();
    $_POST = array();
    $_SESSION = array();
  }

  function displayNav() {
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }

    $listItem = "";

    if(isset($_SESSION['username'])) {
      $listItem = '<li><a href="edit.php">Bearbeiten</a></li>
                   <li><a href="login.php">Ausloggen</a></li>';
    }else {
      $listItem = '<li><a href="login.php">Einloggen</a></li>';
    }

    echo'
    <ul class="hidden">
      <li><a href="index.php">Homepage</a></li>
      ' . $listItem . '
    </ul>';
  }
?>
