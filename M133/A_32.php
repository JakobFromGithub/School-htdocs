<!DOCTYPE html>
<?php
  $array = ["Yennefer","Tris","Ciri","Gerald"]
?>
<html>
  <head>
    <title>A_32</title>
  </head>
  <body>
    <?php
      sort($array);
      foreach ($array as $key => $value) {
        echo $value . '<br />';
      }
    ?>
  </body>
</html>
