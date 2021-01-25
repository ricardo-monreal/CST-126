<!--
 * Project: Milestone 4
 * Author: Ricardo Monreal
 * Date: January 24, 2021
 -->
<style>
    .post-container {
        text-align: center;
    }
    button {
        width: 100px;
    }

</style>
<?php
    session_start();
	require_once 'db_connector.php';

    if ($_SESSION['role'] != 'admin') {
        echo "You do not have Administrator rights!<br>";
	    header("Refresh: 2; url=index.php");
        exit;
    }

	$sql_statement = "SELECT * FROM `blog_posts`";


	if ($link){
		$result = mysqli_query($link, $sql_statement);
		if ($result) {
			while ($row = mysqli_fetch_assoc($result)){
                ?>
                    <div class="post-container"><?php
				echo "Post ID:" . $row['idblog_posts'] . "<br>";
				echo "Post Title: " . $row['blog_post_title'] . "<br>";
				echo "Post Body: " . "<br>" . $row['blog_post'] . "<br>";
	                    ?></div>
                <?php
				?>
				<form action="processDeletePost.php">
					<input type="hidden" name="postID" value="<?php echo $row['idblog_posts'];?>">
					<button type="submit">Delete</button>
				</form>
				<?php
				echo "<hr>";
		}
		} else {
			echo "Error with the SQL " . mysqli_error($link);
		}
	} else {
		echo "Error connecting " . mysqli_error();
	}