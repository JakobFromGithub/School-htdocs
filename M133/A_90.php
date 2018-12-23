<!DOCTYPE html>
<?php
$text =
"Heute schrieb mir Onkel Anton eine E-Mail.
Seine Adresse lautet onkel.anton@bergdorf.ch";

$ausgabe = "";

if(isset($_GET["email"])){
  if(filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)){
    $ausgabe = "wahr";
  } else {
    $ausgabe = "falsch";
  }
}

$suchmuster[] = ['/a/','/e/','/i/','/o/','/u/'];
foreach ($suchmuster as $key => $value) {
  $text = preg_replace($value, "*", $text);
}
?>
<html>
  <head>
    <title>A_90</title>
  </head>
  <body>

    <form>
      <label>E-Mail</label>
      <input name="email" required>
    </form>
    <br/>
    <?php
      echo $text . "<br/>" . $ausgabe;
    ?>
  </body>
</html>
