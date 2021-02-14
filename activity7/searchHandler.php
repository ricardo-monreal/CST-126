<!--
 * Project: Activity 7
 * Author: Ricardo Monreal
 * Date: February 17, 2021
 *
 -->
<?php
	require_once('utility.php');

	// take pattern from user input
	$searchPattern = $_POST['SEARCH'];
	// take result from utility.php function
	$users = getUsersByFirstName($searchPattern);

	// include to display users on webpage
	include '_displayUsers.php';