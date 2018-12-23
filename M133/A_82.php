<!DOCTYPE html>
<html>
  <head>
    <title>A_82</title>
  </head>
  <body>
    <?php
      $dir = scandir(".");

      foreach($dir as $file){
        if(($file != '.') && ($file != '..')){
          if(is_dir($file)){
             $directories[]  = $file;
          }else{
            $files_list[]    = $file;
          }
        }
      }

      foreach($directories as $item){
        if($item != "." && $item != "..") {
          echo "<li><strong><a href='/M133/$item'>$item</a></strong></li>";
        }
      }

      foreach ($files_list as $item) {
        echo "<li><a href='/M133/$item'>$item</a></li>";
      }
    ?>
  </body>
</html>
