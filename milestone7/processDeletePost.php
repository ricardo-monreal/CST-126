<!--
 * Project: Milestone 6
 * Author: Ricardo Monreal
 * Date: January 31, 2021
 -->
<!DOCTYPE html>
<html lang="en">
<style>
    h2 {
        text-align: center;
    }
</style>

<?php include('header.php'); ?>


<?php
	require_once 'db_connector.php';

	$postToDelete = $_GET['postID'];

	$sql_statement = "DELETE FROM `blog_posts` WHERE `blog_posts`.`idblog_posts` = '$postToDelete'";


	if ($link){
		$result = mysqli_query($link, $sql_statement);
		if ($result) {
			echo "<h2>Deleted Post: ID = $postToDelete </h2>";
			header("Refresh: 3; url=index.php");
			//echo "Deleted post: ID = " . $postToDelete . "<br>";
		} else {
			echo "Error with the SQL " . mysqli_error($link);
		}
	} else {
		echo "Error connecting " . mysqli_error();
	}