<?php
	// Constants
	include 'constants.php';
	// Constants

	// Connect to database
	$cxn = mysqli_connect( DB_HOST, DB_USER, DB_PASS );
	if ( ! $cxn ) {
		die( "Database connection failed!" . mysqli_error() );
	}
	
	$db = mysqli_select_db( $cxn, DB_NAME );
	if ( ! $db ) {
		die( "Database selection failed!" . mysqli_error() );
	}
