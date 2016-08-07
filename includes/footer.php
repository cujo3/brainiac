		<footer>
				<p class=" cf left">&copy; <?php echo date('Y'); ?> Copyright. All Rights Reserved. Property of Brainiac</p>
				<p class="cf right"><a href="#">Privacy</a> - <a href="#">Terms &amp; Conditions</a> - <a href="#">Cookies</a>
			</footer>
			
			<script type="text/javascript" src="scripts/main.js"></script>
			<?php  
				if ($title == "Brainiac Chat Room!") {
					print "<script src='scripts/autochat.js' type='text/javascript'></script>";
				}
			?>
	</body>	
</html>
<?php
	if ( isset( $cxn ) ) {
		mysqli_close( $cxn );
	}
?>