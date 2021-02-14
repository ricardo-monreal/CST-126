<!--
 * Project: Milestone 8
 * Author: Ricardo Monreal
 * Date: February 7, 2021
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
	// variables to be passed to comments
	$comments = $_GET['comments'];
	$post_id = $_GET['post_id'];
	$user_ID = $_SESSION['ID'];

	if ($link && isset($_SESSION['ID']))
	{

		$sql_statement = "INSERT INTO `comments` (`idcomments`, `comment_text`, `blog_posts_idblog_posts`, 
                        `users_ID`) VALUES (NULL, '$comments', '$post_id', '$user_ID')";



		$result = mysqli_query($link, $sql_statement);
		if ($result){
			echo "<h2>Your comment has been added!</h2>";
			header("Refresh: 3; url=index.php");

		} else {
			echo "Error in the database. " . mysqli_error($link);
		}
} else {
		echo "Error connecting " . mysqli_connect_error();

		}







?>
<?php include('footer.php'); ?>
</html>

</html>
