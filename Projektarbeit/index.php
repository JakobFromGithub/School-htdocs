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
				displayNav();
			?>
		</nav>
		<!-- Main -->
		<div id="main" class="grid-container">
					<?php
						$columnCounter = 1;
						$activeImages = array();
						$activeTable = readDB("SELECT pk, fileEnding FROM `images` WHERE active = 1 ");

						while ($row = $activeTable->fetch_assoc()) {

							echo '<div class="grid-detail image" >';//image grid-detail
							echo '<img src="images/pic'.$row['pk'].'.' . $row['fileEnding']. '" alt="">';
							echo '</div>';

						}
					?>
		</div>
	</body>
</html>
<!--.('< Linux is better than windows  -->
<!--./V\ -->
<!--<(_) -->
<!--.~~ -->
