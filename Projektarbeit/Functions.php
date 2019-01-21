<?php

  class sql{
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

    function getIdWriteDB($sql) {
      $connection = mysqli_connect("localhost","root","","fotoblock");
      $last_id = "";

      if($connection){
        $connection->query($sql);
        $last_id = mysqli_insert_id($connection);
        $connection->close();
      }
      return $last_id;
    }
  }


  // Hash : CRYPT_BLOWFISH
  function validateLogin($username, $password) {
    if($username != "" && $password != ""){
      $connection = mysqli_connect("localhost","root","","fotoblock");

      if($connection){
        $passwordHash = mysqli_query($connection, 'SELECT PASSWORD FROM `login` WHERE username = "'.$username.'"');
        $connection->close();

        if ($row = $passwordHash->fetch_assoc()) {

          if(password_verify($password,$row['PASSWORD'])){
            return "true";
          }
        }
      }
    }
    return "false";
  }


  /* GET / POST / SESSION  */

  function _end() {
    session_unset();
    $_POST = array();
    $_SESSION = array();
  }

  /* HTML shortcuts */

  function displayNav() {
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }

    $listItem = "";

    if(isset($_SESSION['username'])) {
      $listItem = '<li><a href="edit.php">Bearbeiten</a></li>
                   <li><a href="upload.php">Hochladen</a></li>
                   <li><a href="login.php">Ausloggen</a></li>';
    }else {
      $listItem = '<li><a href="login.php">Einloggen</a></li>';
    }

    echo'
    <ul class="hidden">
      <li><a href="index.php">Homepage</a></li>
      <li><a href="most_liked.php">Meist geliked</a></li>
      ' . $listItem . '
    </ul>';
  }

  /* PHP Functions */
  function dir_is_empty($dir) {
    $handle = opendir($dir);
    while (false !== ($entry = readdir($handle))) {

      if ($entry != "." && $entry != "..") {
        closedir($handle);
        return false;
      }
    }
    closedir($handle);
    return true;
  }
?>
