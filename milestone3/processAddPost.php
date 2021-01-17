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
			echo "The post has been added to your blog!";
			header("Refresh: 3; url=index.php");
		}
		else {
			echo "Error in the database. " . mysqli_error($link);
		}
	}
	else {
		echo "Error connecting " . mysqli_connect_error();
	}