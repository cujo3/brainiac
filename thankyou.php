<?php
session_start();
$title = "Thank You!";
include 'includes/header.php';

?>
		<div id="container">
			<h2>You have successfully joined the geek clan</h2>
			<p>You'll be redirected to the login page in <span id="count">10</span> seconds, click here to <a href="login.php">login</a> now.</p>
		</div>

<?php
	include 'includes/footer.php';
?>