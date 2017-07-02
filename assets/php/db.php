<?php
	require_once('config.php');
	
	$dbHandle = new mysqli($DB['HOST'], $DB['USER'],$DB['PWD'], $DB['DB']);
	
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	

	
?>