<?php
?>

<head>
	<link rel="stylesheet" href="css/posts.css">
</head>
<div class="post-container">
	<h2>Add New Post</h2>
	<p>Fill out all of the fields and submit</p><br>

	<form action="processAddPost.php">
		Post Title:<input type="text" name="postTitle"></input><br>
		Post Body:<br><textarea rows="5" cols="60" name="postBody"></textarea><br>

		<button type="submit">Add</button>
	</form>
</div>

