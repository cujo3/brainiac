<?php
	// 1. Finding all the session
	session_start();

	// 2. Unset all the session variables
	$_SESSION = array();

	// 3. Destroy the session cookie
	if ( isset( $_COOKIE[session_name( 'b' )] ) ) {
		setcookie( session_name(), '', time() - 42000 );
	}

	// 4. Destroy the session
	session_destroy();

	// Redirect back to login page.
	header( "Location: login.php?action=logout" );
	exit();
