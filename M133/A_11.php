<?php
  $titel = "PHP Farben Test";
  $color = "#20233f";

  $zufallswert = dechex(mt_rand(0, 255));
  $color = "#" . $zufallswert . $zufallswert . $zufallswert;
 ?>

<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" rel="stylesheet">
    <title> <?php echo $titel  ?> </title>
  </head>

  <body style=" background-color: <?php echo $color ?>;">
    <?php
      if ($zufallswert < dechex(150)) {
      echo '<p style="color:white">' . $color . '</p>';
      }else{
        echo '<p>' . $color . '</p>';
      }
    ?>
  </body>
</html>
<!-- g: is hex und ist warscheinlich ffffff -->
