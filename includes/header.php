<?php include 'includes/connection.php'; ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
		<?php
			if ( $title == "Thank You!" ) {
				echo "<meta http-equiv='refresh' content='10; url=login.php'>";
			}
			include 'lib.php';
		?>
	</head>
	
	<body>
		<?php  
			if ($title == "Brainiac Dashboard Page") {
			
			} elseif ($title == "Brainiac Chat Room!" || $title == "Brainiac Settings Page") {
				print "<a href='dashboard.php'>" . "<img src='images/back.png' class='home'>" . "</a>";
			} else {
				print "<a href='index.php'>" . "<img src='images/home.png' class='home'>" . "</a>";
			}

		?>
