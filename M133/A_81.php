
<!DOCTYPE html>
<html>
  <head>
    <title>A_81</title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="input"/>
      <button type="submit">submit</button>
    </form>
    <br/>
    <?php
      if(isset($_POST["input"]) && isset($_POST["input"]) != ""){
        file_put_contents("Files/F_81.txt", $_POST["input"] . "\n", FILE_APPEND);
      }

      $fp=fopen('Files/F_81.txt', 'r');
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
          echo $value . "<br/>";
        }
      }
    ?>
  </body>
</html>
