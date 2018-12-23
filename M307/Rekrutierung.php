<!DOCTYPE html>
<?php
  $accepted = true;
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Melde dich!</title>
    <link rel="stylesheet" href="stylesheet.css" />
    <link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
  </head>
  <body>
    <header>
      <div class="headerContent">
        <a href="/M307/"><img src="logo.png" class="logo"/></a>
        <div class="menu">
        <img src="menu.png" class="menuImage"/>
          <ul class="menuItem">
            <li><a href="/M307/">Homepage</a></li>
            <li><a href="Hinrichtungen.html" target="_blank">Öffentliche Hinrichttungen</a></li>
            <li><a href="/Rekrutierung.php">Rekrutierung</a></li>
            <?php
              if(isset($_COOKIE["hasSeen404"]) && $_COOKIE["hasSeen404"] == 1) {
                echo '<li><a href="404.php">404</a></li>';
              }
            ?>
          </ul>
        </div>
      </div>
    </header>
    <div class="main">
      <form method="post" enctype="multipart/form-data">
        <table>
          <tr>
            <td>
              <label>Name*</label>
              <input type="text" class="half-input" name="name" placeholder="Mustervogel" value="<?php if(isset($_POST["name"]) && $_POST["name"] != ""){echo $_POST["name"];}?>" required>
            </td>
            <td>
              <label>Vorname*</label>
              <input type="text" class="half-input" name="firstname" placeholder="Max"  value="<?php if(isset($_POST["firstname"]) && $_POST["firstname"] != ""){echo $_POST["firstname"];}?>" required>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <label>E-Mail*</label>
              <input type="email" name="email" title="Versuchen sie es nochmal" placeholder="max.mustervogel@emu-war.com" value="<?php if(isset($_POST["email"]) && $_POST["email"] != ""){echo $_POST["email"];}?>" required>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <label>Geburtstag</label>
              <input type="date" name="bday" placeholder="Datum" min="2000-01-01" max="<?php echo date("Y-n-d") ?>" title="Sie sind zu alt, wie haben sie länger als 20 Jahre überlebt? Melden sie sich bitte der Medizin-Division" value="<?php if(isset($_POST["bday"]) && $_POST["bday"] != ""){echo $_POST["bday"];}?>" >
            </td>
          </tr>
          <tr>
            <td>
              <label>Grösse</label>
              <input type="number" class="half-input" name="height" placeholder="cm" min="0" max="150" title="Was essen Sie um so gross zu werden?" value="<?php if(isset($_POST["height"]) && $_POST["height"] != ""){echo $_POST["height"];}?>">
            </td>
            <td>
              <label>Gewicht</label>
              <input type="number" class="half-input" name="weight" placeholder="kg" min="0" max="20" title="Casuarina macht schlank, angemessen für Sie" value="<?php if(isset($_POST["weight"]) && $_POST["weight"] != ""){echo $_POST["weight"];}?>">
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <label>Propaganda</label>
              <input type="file" name="fileToUpload" id="fileToUpload">
            </td>
          </tr>
          <tr>
            <td colspan="2">
            <input class="button" type="submit" value="Bewerben" name="submit"/>
            </td>
          </tr>
        </table>
      </form>
      <?php
        $ausgabe = "";
        $td = array();
        $error = "";

        if(isset($_POST["name"])){
          if($_POST["name"] != ""){
            $td[] = "Name:";
            $td[] = $_POST["name"];
          } else {
            $error = $error . 'Ein Name muss gegeben werden! <br/>';
          }
        }
        if(isset($_POST["firstname"])){
          if($_POST["firstname"] != "") {
            $td[] = "Vorname:";
            $td[] = $_POST["firstname"];
          }else {
            $error = $error . 'Ein Vorname muss gegegben werden! <br/>';
          }
        }
        if(isset($_POST["email"])){
          if ($_POST["email"] != "" && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $td[] = "E-Mail:";
            $td[] = $_POST["email"];
          } else {
            $error = $error . 'Eine korrekte E-Mail wird gebraucht! <br/>';
          }
        }
        if(isset($_POST["bday"])){
          if ($_POST["bday"] != ""){
            $datum = new DateTime($_POST["bday"]);
            if($datum->format('U') > 978303600){
              if($datum->format('U') < date('U')){
                $td[] = "Geburtstag:";
                $td[] = $_POST["bday"];
              }else{
                $error = $error . 'Wir mögen Zeitreisende nicht! <br/>';
              }
            } else {
              $error = $error . 'Sie sind zu alt! <br/>';
            }
          }
        }
        if(isset($_POST["height"]) && $_POST["height"] != ""){
          if($_POST["height"] > 0){
            if($_POST["height"] < 150){
              $td[] = "Grösse (cm):";
              $td[] = $_POST["height"];
            }else{
              $error = $error . 'Sie sind zu gross! <br/>';
            }
          }else{
            $error = $error . "Sie sind zu klein! <br/>";
          }
        }
        if(isset($_POST["weight"]) && $_POST["weight"] != ""){
          if($_POST["weight"] > 0){
            if($_POST["weight"] < 20){
              $td[] = "Gewicht (kg):";
              $td[] = $_POST["weight"];
            }else{
              $error = $error . 'Sie wiegen zu viel! <br/>';
            }
          }else{
            $error = $error . "Sie wiegen zu wenig! <br/>";
          }
        }

        if(isset($_POST["submit"]) && isset($_FILES["fileToUpload"])) {
          $target_dir = "uploads/";
          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
          $uploadOk = 1;
          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
          if($check !== false) {
            $uploadOk = 1;
            if (file_exists($target_file)) {
              $error = $error . "Bild existiert bereits! <br/>";
              $uploadOk = 0;
            }
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
              $error = $error . "Datei hat keine Bildendung (JPG, JPEG, PNG oder GIF)! <br/>";
              $uploadOk = 0;
            }
            if ($_FILES["fileToUpload"]["size"] > 8388607) {
              $error = $error . "Bild ist zu gross! <br/>";
              $uploadOk = 0;
            }
            if ($uploadOk == 0) {
            } else {
              if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

              } else {
                $error = $error ."Ein Fehler ist aufgetreten! <br/>";
              }
              $td[] = "Bild:";
              echo $target_file;
              $td[] = '<img src="/' . $target_file . '" class="displayImage"/>';
            }

          } else {
            $error = $error . "Die Datei ist kein Bild! <br/>";
            $uploadOk = 0;
          }
        }


        if($error !=""){
          echo $error;
          $accepted = false;
        }
      ?>
      <table>
        <tr>
          <?php
            if($accepted == true){
              for ($i=0; $i < count($td); $i++) {
                echo "<td>" . $td[$i] . "</td>";
                if($i % 2 == 1 && ($i != 0 && $i != count($td))){
                  echo "</tr><tr>";
                }
              }
            }
          ?>
        </tr>
      </table>
    </main>
  </body>
</html>
