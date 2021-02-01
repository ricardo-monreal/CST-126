<!--
 * Project: Milestone 6
 * Author: Ricardo Monreal
 * Date: January 31, 2021
 -->
<head>
	<link rel="stylesheet" href="css/posts.css">
</head>
<h3>My Feed</h3>
<?php
	session_start();
	require_once 'db_connector.php';

/*	if ($_SESSION['role'] == 'NULL') {
		echo "You do not have Administrator rights!<br>";
		header("Refresh: 2; url=index.php");
		exit;
	}*/

	$sql_statement = "SELECT * FROM `blog_posts`";


	if ($link){
		$result = mysqli_query($link, $sql_statement);
		if ($result) {
			while ($row = mysqli_fetch_assoc($result)){
				?>
				<div class="post-container"><?php
						echo "Post ID: " . $row['idblog_posts']. "<br>". "<hr>";
						echo "Post Title: " .  $row['blog_post_title'] . "<br>". "<hr>";
						echo "Post Body: " . "<hr>" . "<br>" . $row['blog_post'] . "<br>";
					?></div>
				<?php
				?>
				<!-- Admin actions redirects -->



				<?php
				echo "<hr>";
			}
		} else {
			echo "Error with the SQL " . mysqli_error($link);
		}
	} else {
		echo "Error connecting " . mysqli_error();
	}
?>
