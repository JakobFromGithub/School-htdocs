<!DOCTYPE HTML>
<?php
	require("Functions.php");
	session_start();
	?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<nav>
			<?php
			if(isset($_POST['deleteSession']) && $_POST['deleteSession'] == "true"){
				_end();
			}
			if(isset($_SESSION['username'])){
				echo '
				<form method="post" class="login hidden">
					<p class="login">Hallo ' . $_SESSION['username'] . ', schön dich zu sehen!</p>
					<button type="submit" name="deleteSession" value="true">ausloggen</button>
				</form>';
			}
			?>
		</nav>
		<!-- Main -->
		<div id="main">
			<div class="inner">
				<div class="columns">
					<?php
						$activeImages = array();
						$activeTable = readDB("SELECT pk FROM `images` WHERE active = 1 ");

						while ($row = $activeTable->fetch_assoc()) {
							echo '<div class="image fit" >';//style="background-image:url(images/pic' . $row['pk'] . '.jpg);"
							echo '<img src="images/pic'.$row['pk'].'.jpg" alt="">';
							echo '</div>';
						}
					?>
				</div>
			</div>
		</div>
	</body>
</html>
