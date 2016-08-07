<?php 

	function get_msg() {
		global $cxn;
		$sql = "SELECT message FROM chat ORDER BY msgID";
		$results = mysqli_query( $cxn, $sql );

		$messages = array();
		while ( $message = mysqli_fetch_array( $results ) ) {
			$messages = array( 'message' => $message['message'] );
		}
		return $messages;
	}

	function send_msg( $message ) {
		global $cxn;
		if ( ! empty( $message ) ) {
			$message = mysqli_real_escape_string( $cxn, $message );
			$sql = "INSERT INTO chat ( sender, message ) VALUES ( '{$message}' )";
			if ($results = mysqli_query( $cxn, $sql ) ) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
