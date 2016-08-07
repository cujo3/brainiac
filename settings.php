<?php
	require_once 'includes/session.php';
	$title = "Brainiac Settings Page";
	confirm_logged_in();
	include 'includes/header.php';

	$lastname = $_SESSION['lastname'];
	$sql = "SELECT * FROM users WHERE lastname='{$lastname}'";

	if ($results = mysqli_query($cxn, $sql)) {
		$user = mysqli_fetch_array($results);
	} else {
		print "<p class='error'>" . 'Ooops!! Something went wrong!' . "</p>";
	}

	// Update the fields.
	if (isset($_REQUEST['submit'])) {
		$id = $_SESSION['id'];
		$firstname = $_REQUEST['firstname'];
		$lastname = $_REQUEST['lastname'];
		$username = $_REQUEST['username'];
		$email = $_REQUEST['email'];

		$sql = "UPDATE users SET firstname='{$firstname}', 
														 lastname = '{$lastname}', 
														 email = '{$email}' WHERE id=$id";
		$results = mysqli_query($cxn, $sql);
		if ($results) {
			header("Location: dashboard.php?action=done");
			exit();
		} else {
			print "<p class='error'>" . 'Unable to edit this account at this time' . "</p>";
		}
	}

?>

	<div id="container">
		<h2>Brainiac Platform</h2>
    <p>Oh! Looks like you need some editing, <?php print $_SESSION['lastname']; ?>!!</p>
		<form method="POST" action="settings.php" id="editaccount">
			<div>
				<input type="text" value="<?php print $user['firstname']; ?>" name="firstname" id="firstname">
			</div>
			
			<div>
				<input type="text" value="<?php print $user['lastname']; ?>" name="lastname" id="lastname">
			</div>
			
			<div>
				<input type="text" value="<?php print $user['username']; ?>" name="username" id="username" disabled>
			</div>
			
			<div>
				<input type="email" value="<?php print $user['email']; ?>" name="email" id="email">
			</div>
			
			<input type="submit" name="submit" value="Edit details!">
		</form>		

	</div>





<?php include 'includes/footer.php'; ?>