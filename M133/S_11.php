<?php
  session_start();
  if(isset($_POST["save"])){
    if(isset($_SESSION['color'] )){
      file_put_contents("../Farben.txt", $_SESSION['color'] . "\n", FILE_APPEND);
    }else{
      echo 'error';
    }
  }
  $zufallswert = mt_rand(0, 16777215);
  $color = "#" . dechex($zufallswert);
  $_SESSION['color'] = $color;
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>S_11</title>
  </head>
  <body style=" background-color: <?php echo $color ?>;">
    <p><?php echo $color ?></p>
    <br/>
    <form method="post">
      <button type="submit" name="save">save</button>
    </form>
    <form method="post">
      <button type="submit" name="refresh">refresh</button>
    </form>
  </body>
</html>
