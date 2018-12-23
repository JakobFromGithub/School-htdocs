<!--192.168.188.128-->
<!-- gibt ein loop ::1 -->
<!DOCTYPE html>
<html>
  <head>
    <title>A_61</title>
  </head>
  <body>
    <?php
      if( $_SERVER["REMOTE_ADDR"] == "::1"){
        echo 'IP ist ::1';
      }else{
        echo 'IP ist nicht ::1';
      }
    ?>
  </body>
</html>
