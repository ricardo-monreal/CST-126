<!--
 * Project: Milestone 5
 * Author: Ricardo Monreal
 * Date: January 31, 2021
 -->
<?php

	$id = $_GET['postID'];
	// connection to fill the edit form from the database

	require_once 'db_connector.php';

	if ($link) {
		$sql_statement = "SELECT * FROM `blog_posts` WHERE `idblog_posts` = '$id' LIMIT 1";
		$result = mysqli_query($link, $sql_statement);
		if($result) {
			while ($row = mysqli_fetch_assoc($result)) {
				$post_title = $row['blog_post_title'];
				$post_body = $row['blog_post'];
			}

		} else {
			echo "There was a sql problem " . mysqli_error($link);
		}
	} else {
		echo "Error connecting " . mysqli_connect_error();
	}

?>

<head>
	<!--    HTML editor for blog posts -->
	<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
	<script>
        tinymce.init({
            selector: '#postBody'
        });
	</script>
	<link rel="stylesheet" href="css/posts.css">
</head>

<!-- Form to edit posts, filled with info from database -->
<div class="post-container">
	<h2>Edit A Post</h2>
	<p>Fill out all of the fields and submit</p><br>

	<form action="processEditPost.php">
        <input type="hidden" name="id" value="<?php echo $id;?>">
		Post Title:<input type="text" name="postTitle" value="<?php echo $post_title; ?>"></input><br>
		Post Body:<br><textarea id="postBody" rows="10" cols="100" name="postBody"><?php echo $post_title; ?></textarea><br>

		<button type="submit">Submit Changes</button>
	</form>
</div>
