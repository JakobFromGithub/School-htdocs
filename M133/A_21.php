<!DOCTYPE html>
<html>
  <head>
    <title>A_21</title>
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
        $satz = "Mein Name ist " . $Name . ", und bin ". $Alter . " alt.";
        echo $satz;
    }
?>
