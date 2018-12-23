<!DOCTYPE html>
<html>
  <head>
    <title>A_60</title>
  </head>
  <body>
    <?php
      if(hash_file("md5","Files/F_60.txt") == "5fefc12516bab0532cb619e56263f140" ){
        echo "File unverändert";
      }else{
        echo "File wured verändert";
      }
    ?>
  </body>
</html>
