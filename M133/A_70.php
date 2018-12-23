<!DOCTYPE html>
<html>
  <head>
    <title>A_70</title>
  </head>
  <body>
    <?php
      $h = date("G");
      $m = date("i");
      $s = date("s");
      echo "Jetzt ist ".$h.":".$m.":".$s."Uhr.";
      echo '<br/>';
      $date = date_create();
      date_time_set($date , 17 , 0 , 0);
      echo 'Eingestellte Zeit: ' . $date->format('G:i:s');
      echo '<br/>';
      echo 'Noch ' . ($date->format('U') - date('U')) . ' Sekunden bis ' .$date->format('G:i:s');
    ?>
  </body>
</html>
