<?php
  function wuerfeln(){
    echo mt_rand(1,6);
  }
  function lotto(){
    echo mt_rand(0,49);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>A_51</title>
  </head>
  <body>
    <?php
      wuerfeln();
      echo'<br/>';
      lotto();
    ?>
    <br/>
    <form>
       <button type="submit"> submit </button>
    </form>
  </body>
</html>
