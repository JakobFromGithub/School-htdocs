<!DOCTYPE html>
<html>
  <head>
    <title>A_20</title>
  </head>
  <body>
      <?php
          namesausgabe("Otto", 17);
          echo "<br />";
          namesausgabe();
      ?>
  </body>
</html>

<?php
    function namesausgabe($Name = "", $Alter = 0) {
        echo "Mein Name ist " . $Name . ", und bin ". $Alter . " alt.";
    }
?>
