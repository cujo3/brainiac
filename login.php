<?php
	require_once 'includes/session.php';
	require_once 'includes/functions.php';
	$title = "Brainiac Login Page";
	if ( isset( $_SESSION['id']) ) {
		header( "Location: dashboard.php" );
		exit();
	}
	
	include 'includes/header.php';

		// Successfully registered.
		register_success();

		// Logout successfully.
		logout_success();

		// Login Form submission
		login();

		if ( ! empty( $feed ) ) {
			print $feed;
		} else {
			$feed = "";
		}

	?>
	
	<div id="container">
		<h2>Brainiac Platform</h2>
		<p>Login your credentials below.</p>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="login">
			<div>
				<input type="text" placeholder="Enter your username" required autofocus name="username" id="username" />
			</div>

			<div>
				<input type="password" placeholder="*********" required name="password" id="password" />
			</div>

			<input type="submit" value="Login" name="submit">
		</form>

		<p>I'm having troubles accessing my <a href="reset.php">account</a></p>

		<a href="register.php" class="register" name="register">Join the Team</a>

	</div>

<?php include 'includes/footer.php'; ?>
