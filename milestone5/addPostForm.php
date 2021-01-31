<!--
 * Project: Milestone 4
 * Author: Ricardo Monreal
 * Date: January 24, 2021
 -->
<?php
?>

<head>

<!--    HTML editr for blog posts-->
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: '#postBody'


        });
    </script>


    <link rel="stylesheet" href="css/posts.css">



</head>


<div class="post-container">
	<h2>Add New Post</h2>
	<p>Fill out all of the fields and submit</p><br>

	<form action="processAddPost.php">
		Post Title:<input type="text" name="postTitle"></input><br>
		Post Body:<br><textarea id="postBody" rows="10" cols="100" name="postBody"></textarea><br>

		<button type="submit">Add</button>
	</form>
</div>

