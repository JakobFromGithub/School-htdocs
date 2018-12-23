
<!DOCTYPE html>
<html>
  <head>
    <title>A_91</title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="input"/>
      <button type="submit">submit</button>
    </form>
    <br/>
    <?php
      if(isset($_POST["input"]) && $_POST["input"] != ""){
        $fp=fopen('Files/F_91.txt', 'r');
        $Array = array();

        while (!feof($fp))
        {
          $line=fgets($fp);
          $line=trim($line);
          if($line != "")
          $Array[]=$line;
        }
        fclose($fp);
        if(!in_array($_POST["input"], $Array)){
          file_put_contents("Files/F_91.txt", $_POST["input"] . "\n", FILE_APPEND);
        }
      }else {
        echo "Kein Input <br/>";
      }

      $fp=fopen('Files/F_91.txt', 'r');
      $Array = array();

      while (!feof($fp))
      {
        $line=fgets($fp);
        $line=trim($line);
        if($line != "")
        $Array[]=$line;
      }
      fclose($fp);

      if($Array != ""){
        foreach($Array as $key => $value){
          echo "<a href=http://".$value.">" .$value . "</a> <br/>";
        }
      }
    ?>
  </body>
</html>
