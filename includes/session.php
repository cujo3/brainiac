<?php
//	Setting the session name
//	session_name( "BRAINIAC_ID" );

	session_cache_limiter('private');
	$cache_limiter = session_cache_limiter();

	/* set the cache expire to 1 minute */
	session_cache_expire(1);
	$cache_expire = session_cache_expire();

	/* start the session */
	session_start();
	
	function logged_in() {
		return isset($_SESSION['lastname']);
	}

	function confirm_logged_in() {
		if (!logged_in()) {
	    header('Location: login.php');
	    exit();
  	}
	}