<!--
 * Project: Milestone 5
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

	session_start();

	require_once "db_connector.php";


	$postTitle = $_GET['postTitle'];
	$postBody = $_GET['postBody'];
	$id = $_GET['id'];
	$user_ID = $_SESSION['ID'];
	$role = $_SESSION['role'];

	$sql_statement = $sql = "UPDATE `blog_posts` SET `blog_post_title` = '$postTitle' , `blog_post` = '$postBody'
							 	WHERE `idblog_posts` = '$id'";

	if ($link) {
		$result = mysqli_query($link, $sql_statement);
		if ($result){
			echo "<h2>The post has been updated!</h2>";
			header("Refresh: 3; url=index.php");
		}
		else {
			echo "Error in the database. " . mysqli_error($link);
		}
	}
	else {
		echo "Error connecting " . mysqli_connect_error();
	}
?>
<?php include('footer.php'); ?>
</html>

</html>
