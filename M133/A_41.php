<!DOCTYPE html>
<?php
  $colorCode = "#fff";
  if(isset($_GET['backgroundColor'])){
    switch ($_GET['backgroundColor']) {
      case 'red':
        $colorCode = "#f00";
        break;
      case 'green':
        $colorCode = "#0f0";
        break;
      case 'blue':
        $colorCode = "#00f";
        break;
      case 'yellow':
        $colorCode = "#f90";
        break;
      case 'gray':
        $colorCode = "#777";
        break;
        default:
        $colorCode = "#fff";
        break;
    }
  }
 ?>
<html>
  <head>
    <title>A_41</title>
  </head>
  <body style="background-color:<?php echo $colorCode; ?>;">
    <form>
      <input type="radio" value="red" name="backgroundColor" />Rot
      <input type="radio" value="green" name="backgroundColor" />Grün
      <input type="radio" value="blue" name="backgroundColor" />Blau
      <input type="radio" value="yellow" name="backgroundColor" />Gelb
      <input type="radio" value="gray" name="backgroundColor" />Grau
      <button type="submit">send</button>
    </form>
    <br/>
    <?php
      if($colorCode == "#fff"){
        echo "Es wurde keine Hintergrundfarbe ausgewählt.";
      }
    ?>
  </body>
</html>
