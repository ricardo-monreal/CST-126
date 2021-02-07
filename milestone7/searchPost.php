<!--
 * Project: Milestone 6
 * Author: Ricardo Monreal
 * Date: January 31, 2021
 -->
<?php
	require_once 'db_connector.php';

	$searchForTitle = $_GET['postName'];
	$searchForBody = $_GET['postBody'];

	$sql_statement = "SELECT * FROM `blog_posts` WHERE 'blog_post_title' LIKE '%$searchForTitle%' OR 
					'blog_post' LIKE '%$searchForBody%'";


	if ($link){
		$result = mysqli_query($link, $sql_statement);
		if ($result) {
			while ($row = mysqli_fetch_assoc($result)){
				echo "Post ID:" . $row['idblog_posts'] . "<br>";
				echo "Post Title: " . $row['blog_post_title'] . "<br>";
				echo "Post Body: " . "<br>" . $row['blog_post'] . "<br>";
				echo "<hr>";
			}
		} else {
			echo "Error with the SQL " . mysqli_error($link);
		}
	} else {
		echo "Error connecting " . mysqli_error();
	}