<!DOCTYPE html>
<?php
  $connection = mysqli_connect("localhost","root","","m133a100");
?>
<html>
  <head>
    <title>A_100</title>
  </head>
  <body>
    <?php
      if(!$connection){
        echo "Konnte keine Connection herstellen!";
      } else {
        echo "Connection erfolgreich! <br/>";
      }

      $sql = "SELECT id, name, email, message, datum FROM `messageboard`";
      $result = mysqli_query($connection, $sql);

      if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. " <strong>" . $row["message"] ."</strong> " .$row["datum"] . "<br>";
        }
      } else {
          echo "0 results";
      }
      $connection->close();
    ?>
  </body>
</html>
