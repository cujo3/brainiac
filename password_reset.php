<?php  
	session_start();
	$title = "Brainiac Password Reset Page";
	include 'includes/header.php';

	if (isset($_GET['err']) && $_GET['err'] == 1) {
		print "<p class='error'>" . "Password fields don't match" . "</p>";
	}

	if (isset($_REQUEST['reset'])) {
		// $id = $_SESSION['id'];
		if ($_REQUEST['password'] !== $_REQUEST['cpassword']) {
			header("Location: password_reset.php?err=1");
			exit();
		} else {
			$password = sha1($_REQUEST['password']);
		}
		$sql = "UPDATE users SET password='{$password}' WHERE id=$id";
		if ($results = mysqli_query($cxn, $sql)) {
			// Password reset completed.
			header("Location: login.php?act=success");
			exit();	
		} else {
			print "<p class='error'>" . 'Oops!! Something went wrong somewhere!' . "</p>";
		}
	}
?>


	<div id="container">
		<h2>Enter new Password</h2>
		<p>Please make sure you don't forget this one!</p>
		<form method="POST" action="password_reset.php" id="passreset">
			<div>
				<input type="password" placeholder="Abeg enter your password jooor" required autofocus name="password" id="password">
			</div>
			
			<div>
				<input type="password" placeholder="Abeg confirm your password jooor" required name="cpassword" id="cpassword">
			</div>

			<input type="submit" name="reset" value="Reset Password">
		</form>

	</div>


	<?php include 'includes/footer.php'; ?>