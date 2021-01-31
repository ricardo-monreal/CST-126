<!--
 * Project: Milestone 5
 * Author: Ricardo Monreal
 * Date: January 31, 2021
 -->
<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "milestone5";

// Create connection
	$link = mysqli_connect($servername, $username, $password, $dbname);


