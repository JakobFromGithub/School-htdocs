<!DOCTYPE html>
<?php
  $array = ["Yennefer","Tris","Ciri","Gerald"]
?>
<html>
  <head>
    <title>A_31</title>
  </head>
  <body>
    <?php
        foreach ($array as $key => $value) {
          echo $value . '<br />';
        }
    ?>
  </body>
</html>
