<?php
	require_once 'includes/session.php';
	$title = "Brainiac Reset Page";
	include 'includes/header.php';

?>

	<div id="container">
		<h2>Reset Your Password</h2>
		<p>Geeks don't forget their passwords, you should be ashamed of yourself!</p>
		<form method="POST" action="<?php print $_SERVER['PHP_SELF']; ?>" id="login">
			<div>
				<input type="email" placeholder="Abeg enter your email jooor" required autofocus name="email" id="email">
			</div>
			
			<input type="submit" name="reset" value="Reset Password">
		</form>
		
		<p>Finally... You remember your password! <a href="login.php">Login</a></p>
	</div>
		
<?php include 'includes/footer.php'; ?>