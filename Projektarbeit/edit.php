<!DOCTYPE HTML>
<?php
	require("Functions.php");	
	session_start();

	if(isset($_POST['username']) && isset($_POST['password'])
		&& validateLogin($_POST['username'], $_POST['password']) == "true"){
			$_SESSION['username'] = $_POST['username'];
			$_POST['username'] = "";
			$_POST['password'] = "";
	}

	echo "<br/> ".$_SESSION['username'];

	if(!isset($_SESSION['username']) || !($_SESSION['username'] == "admin")){
		header('Location: login.php');
		die();
	}
?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<div id="main">
			<div class="inner">
				<div class="columns">
					<?php
						$activeImages = array();
						$activeTable = readDB("SELECT pk, active FROM `images`");

						while ($row = $activeTable->fetch_assoc()) {
							$class = "";
							if((int)$row['active'] == 0){
								$class = "inactive";
							}

							echo '<div class="image fit edit">';
							echo '<img src="images/pic' . $row['pk'] . '.jpg" class="' . $class . '" alt="">';
							echo '</div>';
						}
					?>
				</div>
			</div>
		</div>
	</body>
</html>
