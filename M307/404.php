<!DOCTYPE html>
<?php
  setcookie("hasSeen404", 1,time() + 3600);
?>
<html>
  <head>
    <title>👌404</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="stylesheet.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
  </head>
  <body class="EmuBackground">
    <header>
      <div class="headerContent">
        <a href="/"><img src="logo.png" class="logo"/></a>
        <div class="menu">
        <img src="menu.png" class="menuImage"/>
          <ul class="menuItem">
            <li><a href="/">Homepage</a></li>
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
      <h1>404</h1>
      <p>Der Link ist falsch, genaus so wie die UNTERDRÜCKUNG der Emu-Herrenrasse!</p>
      <p>
        Hier sind hilfreiche Links
        <ul>
          <li>
            <a href="index.php">zur Homepage</a>
          </li>
          <li>
            <a href="https://google.com">zu Google</a>
          </li>
        </ul>
      </p>
    </div>
  </body>
</html>
