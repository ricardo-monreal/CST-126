<!--
 * Project: Final Project
 * Author: Ricardo Monreal
 * Date: February 14, 2021
 -->
<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "cst126_final";

// Create connection
	$link = mysqli_connect($servername, $username, $password, $dbname);


