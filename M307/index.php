<!DOCTYPE html>
<html>
  <head>
    <title>Emu Rekrutierung</title>
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
      <div class="tile-big-div">
        <img src="Images/1.jpeg" class="tile-big"/>
      </div>
      <div class="tile-big-div">
        <img src="Images/2.jpeg" class="tile-big"/>
      </div>
      <div class="tile-big-div">
        <img src="Images/3.jpeg" class="tile-big"/>
      </div>
      <div class="tile-small-div">
        <img src="Images/4.jpeg" class="tile-small"/>
      </div>
      <div class="tile-small-div">
        <img src="Images/5.jpeg" class="tile-small"/>
      </div>
      <div class="tile-small-div">
        <img src="Images/6.jpeg" class="tile-small"/>
      </div>
      <div class="tile-small-div">
        <img src="Images/7.jpeg" class="tile-small"/>
      </div>
    </div>
   </body>
</html>
