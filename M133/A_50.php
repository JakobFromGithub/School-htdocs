<!DOCTYPE html>
<?php
  function umrechnen($Dezimal){
    echo 'Dezimal: ' . $Dezimal . '<br/>Binaer: ' . decbin($Dezimal)  . '<br/>Hexadezimal: ' . dechex($Dezimal);
  }
 ?>
<html>
  <head>
    <title>A_50</title>
  </head>
  <body>
    <form>
      <input name="var" type="number"/>
      <button type="submit">submit</button>
    </form>
    <?php
      if(isset($_GET["var"]) && $_GET["var"] !== ""){
        umrechnen($_GET["var"]);
      }
    ?>
  </body>
</html>
