<!DOCTYPE html>
<html>
  <head>
    <title>A_40</title>
  </head>
  <body>
    <form>
      <input name="text1"></input>
      <input name="text2"></input>
      <button type="submit">senden</button>
      <?php
        if(isset($_GET['text1']) && $_GET['text1'] !== ""){
          echo "Inhalt des ersten Feldes ist: ". $_GET['text1'] .'<br/>';
        }
        if(isset($_GET['text2']) &&  $_GET['text1'] !== ""){
          echo "Inhalt des ersten Feldes ist: ". $_GET['text2'];
        }
        for ($i=1; $i < 5; $i++) {
          echo '<br/><a href="?Link='.$i.'">link '.$i.'</a>';
        }
        echo '<br/>';
        if(isset($_GET['Link']) &&  $_GET['Link'] !== ""){
          echo "Link ist ". $_GET['Link'];
        }
      ?>
    <form>
  </body>
</html>
