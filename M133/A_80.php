<!DOCTYPE html>
<html>
  <head>
    <title>A_80</title>
  </head>
  <body>
    <?php
      $fp=fopen('Files/F_80.txt', 'r');

      while (!feof($fp))
      {
        $line=fgets($fp);
        $line=trim($line);
        if($line != "")
        $Array[]=$line;
      }
      fclose($fp);

      $Array = array_reverse($Array);

      foreach($Array as $key => $value){
        echo $value . "<br/>";
      }
    ?>
  </body>
</html>
