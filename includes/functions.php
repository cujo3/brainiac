<?php  
	/*
	 * @author: Akitoye Joseph
	 * @project: Brainiac Login System
   * File: functions.php
   * Title: All site related functions.
   */

	function register_success() {
		// Get the variable from the registration page
		if (@$_GET['action'] == "success") {
			print "<p class='success'>" . "You have successfully joined the geek clan, login to view dashboard!" . "</p>";
		}
	}

	function get_msg() {
		global $cxn;
		$sql = "SELECT message FROM chat ORDER BY msgID";
		$results = mysqli_query($cxn, $sql);

		$messages = array();
		while ( $message = mysqli_fetch_array( $results ) ) {
			$messages = array( 'message' => $message['message'] );
		}
		return $messages;
	}

	function send_msg( $message ) {
		global $cxn;
		if ( ! empty( $message ) ) {
			// $message = mysqli_real_escape_string($message);
			$message = mysqli_real_escape_string($cxn, $message);
			$sql = "INSERT INTO chat (sender, message) VALUES ('{$message}')";
			if ($results = mysqli_query($cxn, $sql)) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	function logout_success() {
		if (@$_GET['action'] == "logout") {
			print "<p class='success'>" . "You have successfully logged out!" . "</p>";
		}
	}

	function login() {
		if ( isset( $_POST['submit'] ) ) {
			global $cxn;
			$username = trim( $_POST['username'] );
			$hash_password = sha1( $_POST['password'] );
			$sql = "SELECT * FROM login WHERE username='{$username}' AND password='{$hash_password}'";
			$result = mysqli_query( $cxn, $sql );

			// check if the field exists in our database returns just 1 row
			if (mysqli_num_rows( $result ) == 1) {
				// username and password match
				$user_found = mysqli_fetch_array( $result );
				$_SESSION['id'] = $user_found['id'];
				$_SESSION['lastname'] = $user_found['lastname'];
				redirect('dashboard.php');
			} else {
				// username not in our database.
				print "<p class='feedback'>" . "User not in our database, please register!" . "</p>";
			}
		}
	}
	
	function redirect( $location = null ) {
		if( ! $location != null ) {
			header('Location: ' . $location );
			exit();
		}
	}
