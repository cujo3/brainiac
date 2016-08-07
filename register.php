<?php
	$title = "Brainiac Register Page";
	include 'includes/header.php';
?>

<?php
		// If username exists in the database
		if ( @$_GET[err] == 1 ) {
			print "<p class='feedback'>" . 'Username already taken' . "</p>";
		}
		// If the password fields don't match
		if ( @$_GET['action'] == "failed" ) {
				print "<p class='error'>" . "Passwords fields don't match" . "</p>";
		}
		// Form submission
		if ( isset( $_REQUEST['submit'] ) ) {
			$username = $_REQUEST['username'];
			$sql = "SELECT username FROM {$db_table} WHERE username='$username'";
			$results = @mysqli_query( $cxn, $sql );
			if ( mysqli_num_rows( $results ) == 1 ) {
				// Username already exist
				header( 'Location: register.php?err=1' );
				exit;
			}
			$firstname = $_REQUEST['firstname'];
			$lastname = $_REQUEST['lastname'];
			$email = $_REQUEST['email'];
			if ($_REQUEST['password'] !== $_REQUEST['cpassword']) {
				header('Location: register.php?action=failed');
				exit;
			} else {
				$password = sha1($_REQUEST['password']);
			}
			$sql = "INSERT INTO users (firstname, lastname, password, username, email) VALUES ('{$firstname}', '{$lastname}', '$password}', '{$username}', '{$email}')";
			$results = mysqli_query($cxn, $sql);
			if ($results) {
//				header('Location: login.php?action=success');
				header( 'Location: thankyou.php' );
				exit;
			} else {
				print "<p class='error'>" . "An error occured creating your account" . "</p>"; 
			}
		}
?>

	<div id="container">
		<h2>Join the Clan!</h2>
		<p>Please fill in your credentials</p>
		<form method="POST" action="register.php" id="signup">
			<div>
				<input type="text" placeholder="First name" required autofocus name="firstname" id="firstname">
			</div>
			
			<div>
				<input type="text" placeholder="Last name" required name="lastname" id="lastname">
			</div>
			
			<div>
				<input type="text" placeholder="Please provide your username" required name="username" id="username">
			</div>
			
			<div>
				<input type="password" name="password" required placeholder="Password" id="password">
			</div>
			
			<div>
				<input type="password" placeholder="Confirm password" required id="cpassword" name="cpassword">
			</div>
			
			<div>
				<input type="email" placeholder="Please provide your email address" required name="email" id="email">
			</div>
			
			<input type="submit" name="submit" value="Join the Team!">
		</form>
		
		<p>Already a member? Back to <a href="login.php">login</a> page.</p>
	</div>
	
<?php include 'includes/footer.php'; ?>