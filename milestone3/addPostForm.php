<?php
?>

<head>
	<link rel="stylesheet" href="css/style.css">
</head>
<div class="form-container">
	<h2>Add New Post</h2>
	<p>Fill out all of the fields and submit</p>
	<form action="processAddPost.php">
		Post Title:<input type="text" name="recipeTitle"></input><br>
		Post Body:<textarea rows="5" cols="30" name="recipeIngredients"></textarea><br>

		<button type="submit">Add</button>
	</form>
</div>

