<?php
  $text = "Guten Tag Herr Vollzugsbeamter";
  function textumwandlung($text, $GrossOderKlein) {
    if($GrossOderKlein == "g"){
      echo strtoupper($text);
    }elseif($GrossOderKlein == "k"){
      echo strtolower($text);
    }else{
      echo 'Error';
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>A_33</title>
  </head>
  <body>
    <?php
      textumwandlung($text, "g");
      echo '<br/>';
      textumwandlung($text, "k");
      echo '<br/>';
      textumwandlung($text, "text");
      echo '<br/>'
    ?>
  </body>
</html>
