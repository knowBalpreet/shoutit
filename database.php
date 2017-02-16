<?php
	$con = mysqli_connect("localhost", "root", "", "shoutit");
	if (mysqli_connect_errno()) {
		echo "Failed to Connect to MYSql:".mysqli_connect_error();
	}
?>