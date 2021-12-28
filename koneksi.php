<?php
	// (nama server, user, password, database)
	$mysqli = new mysqli("10.0.0.242", "admin", "1931710173Dio.", "pegawai");
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
