<!--
 * Project: Milestone 7
 * Author: Ricardo Monreal
 * Date: February 7, 2021
 -->
<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "milestone7";

// Create connection
	$link = mysqli_connect($servername, $username, $password, $dbname);


