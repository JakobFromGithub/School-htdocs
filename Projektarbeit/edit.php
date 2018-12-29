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
		<nav>
			<?php
				displayNav();
			?>
		</nav>
		<div id="main" class="grid-container">

<!--
<form>
	<tr>
		<td colspan="2">
			<button name="deleteFoto" value="true">löschen </button>
		</td>
	</tr>
</form>
-->

				<?php
					$updateActive = readDB("SELECT pk, active FROM `images`");

					while ($row = $updateActive->fetch_assoc()) {
						if(isset($_POST['active_pic' . $row['pk']]) && !($_POST['active_pic' . $row['pk']] == $row['active'])) {//
							writeDB('UPDATE `images` SET `active` = '. $_POST['active_pic' . $row['pk']] .' WHERE `images`.`pk` = ' . $row['pk']);
						}
					}

					$activeTable = readDB("SELECT pk, fileEnding, active FROM `images`");

					while ($row = $activeTable->fetch_assoc()) {
						$class = "";
						$ischecked = "";

						if($row['active'] == 0){
							$class = ' class="inactive"';
						}

						if($row['active'] == 1){
						 	$ischecked = "checked";
					 	}

						echo '<div class="grid-detail">
										<div class="image">
											<img src="images/pic' . $row['pk'] . '.' . $row['fileEnding'] . '"' . $class . ' alt="">
										</div>
										<form method="post" class="active-overlay">
											<table>
												<tr>
													<td>active:</td>
													<td>
														<input type="hidden" name="active_pic'. $row['pk'] . '" value="0" />
														<input type="checkbox" name="active_pic'. $row['pk'] . '" value="1" onchange="this.form.submit()" ' . $ischecked . '/>
													</td>
												</tr>
											</table>
										</form>
									</div>';
					}
				?>
			</div>
		</div>
	</body>
</html>
