<!DOCTYPE html>
<html>
  <head>
    <title>A_72</title>
  </head>
  <body>
    <form method="post">
      <input type="date" name="bday" />
      <button type="submit"> submit </button>
    </form>
    <?php
      if(isset($_POST['bday'])){
        $bday = strtotime($_POST['bday']);
        echo "You were born on a " . date('l', $bday) . ".";
      }
    ?>
  </body>
</html>
