<!--  #171316  #5e5e66  #b1b4bd  #f8f9fb  #ece4dc  -->

<?php
  if(isset($_POST["fileName"])){
    $FileName = $_POST["fileName"];

    $fp =fopen("M133/".$FileName . ".php", "w");

    $phpStructure = "<!DOCTYPE html>
<?php

?>
<html>
  <head>
    <title>" . $FileName . "</title>
  </head>
  <body>

  </body>
</html>";

    file_put_contents("M133/".$FileName . ".php", $phpStructure);

    fclose($fp);
  }

  $fp=fopen('Farben.txt', 'r');

  while (!feof($fp))
  {
    $line=fgets($fp);
    $line=trim($line);
    if($line != "")
    $colorArray[]=$line;
  }

  arsort($colorArray);

  fclose($fp);
?>
<html>
    <head>
        <title>index.php</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <script type="text/javascript" src="script.js"></script>
    </head>
    <body onload="startTime()">
        <div id='clock' class='time'>
        </div>
        <nav>
          <ul>
            <?php
                $dir= "M133";
                $a = scandir($dir);

                foreach($a as $item){
                  if(!is_dir($item) && ($item != "Files" && $item != "Vorlage.php")) {
                    echo "<li><a href='/M133/$item'>$item</a></li>";
                  }
                }
              ?>
              <form method="post" id="newFile">
                <input type="text" name="fileName" />
                <button type="submit" form="newFile">create</button>
              </form>
          </ul>
        </nav>
        <main>
        <?php
          foreach ($colorArray as $key => $value) {
            list($r, $g, $b) = sscanf($value, "#%02x%02x%02x");

            if (($r + $g + $b) < 200) {
              $textcolor = "#ffffff";
            } else {
              $textcolor = "#000000";
            }
            echo '<div class="box" style="background-color:' . $value . '; color:'.$textcolor.' ">' . $value . '<br/>R: '.$r.'<br/>G:' .$g. '<br/>B:'.$b.'</div>';
          }
        ?>
        </main>
    </body>
</html>
