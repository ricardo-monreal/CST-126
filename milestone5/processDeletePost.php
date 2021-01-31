<!--
 * Project: Milestone 5
 * Author: Ricardo Monreal
 * Date: January 31, 2021
 -->
<?php
	require_once 'db_connector.php';

	$postToDelete = $_GET['postID'];

	$sql_statement = "DELETE FROM `blog_posts` WHERE `blog_posts`.`idblog_posts` = '$postToDelete'";


	if ($link){
		$result = mysqli_query($link, $sql_statement);
		if ($result) {
			echo "Deleted item " . $postToDelete . "<br>";
		} else {
			echo "Error with the SQL " . mysqli_error($link);
		}
	} else {
		echo "Error connecting " . mysqli_error();
	}