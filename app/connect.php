<?php

	session_start();

	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$connect = mysqli_connect("localhost", "root", "", "pln");

	if($connect === FALSE) {
		echo "FAILED TO CONNECT DATABASE";
		die();
	}