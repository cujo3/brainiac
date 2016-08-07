<?php 
	require_once 'includes/session.php';
	$title = "Brainiac Chat Room!";
	confirm_logged_in();
	// site header
	include 'includes/header.php';
	require_once 'includes/chat.func.php';
?>

	<div id="container">
		<h2>Geek's Lounge</h2>
		<p>Welcome to geek's lounge, ask &amp; it shall be answered!</p>

		<div id="messages">
			
		</div>
	</div><!-- end container div -->

	<div id="chatbox">
		<form method="post" action="chat.php" id="chatform">
			<div class="">
				<input type="text" autofocus name="message" id="message" placeholder="Press enter to send message">
				<input type="submit" value="Send" name="send">			
			</div>	
		</form>
	</div><!-- end chatbox div -->

<!-- site footer -->
<?php include 'includes/footer.php'; ?>