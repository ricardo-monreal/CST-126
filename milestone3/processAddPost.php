<!--
 * Project: Milestone 3
 * Author: Ricardo Monreal
 * Date: January 17, 2021
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
	$user_ID = $_SESSION['ID'];

	$sql_statement = $sql = "INSERT INTO `blog_posts` (`blog_post_title`, `blog_post`,
                          `users_ID`) VALUES ('$postTitle', '$postBody','$user_ID')";

	if ($link) {
		$result = mysqli_query($link, $sql_statement);
		if ($result){
			echo "<h2>The post has been added to your blog!</h2>";
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
