<!DOCTYPE html>
<html>
  <head>
    <title>A_71</title>
  </head>
  <body>
    <?php
      $wochentag = "error";

      switch (date("N")) {
        case '1':
          $wochentag = "Montag";
          break;
        case '2':
          $wochentag = "Dienstag";
          break;
        case '3':
          $wochentag = "Mittwoch";
          break;
        case '4':
          $wochentag = "Donnerstag";
          break;
        case '5':
          $wochentag = "Freitag";
          break;
        case '6':
          $wochentag = "Samstag";
          break;
        case '7':
        $wochentag = "Sontag";
          break;
        default:
          echo 'Date isnt valid';
          break;
      }

      $Stunde = date("G");

      if($Stunde <= 12){
        echo "Guten Morgen, <br/>";
      } elseif ($Stunde <= 18) {
        echo "Guten Tag, <br/>";
      } else {
        echo "Guten Abend, <br/>";
      }

      echo "Heute ist " . $wochentag . ", der " . date("j. F Y, G:i");
      echo "<br/>";
      $NächstesJahr = date_create();
      date_time_set($NächstesJahr, 0, 0, 0);
      date_date_set($NächstesJahr, date("Y") + 1, 1, 1);
      $gesInt = $NächstesJahr->format('U') - date('U');
      echo "Noch ". date("n", $gesInt) . " Monate, " . date("d", $gesInt) . " Tage, " . date("G", $gesInt) . " Stunden, " . date("i", $gesInt) . " Minuten, " . date("s", $gesInt) . " Sekunden bis ". (date("Y") + 1) ;
      echo "<br/>".$NächstesJahr->format('U'). " - ";
      echo date('U') . " = ";
      echo $gesInt;
    ?>
  </body>
</html>
