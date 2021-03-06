<!--
 * Project: Milestone 7
 * Author: Ricardo Monreal
 * Date: February 7, 2021
 -->
<head>

    <link rel="stylesheet" href="css/posts.css">

    <style>
        .post-container {
            text-align: center;
        }
        button {
            width: 100px;
        }

    </style>
</head>

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
				echo "Post ID:" . $row['idblog_posts'] . "<br>" . "<hr>";
				echo "Post Title: " . $row['blog_post_title'] . "<br>" . "<hr>";
				echo "Post Body: " . "<br>" . $row['blog_post'] . "<br>" . "<hr>";
	                    ?></div>
                <?php
				?>
                <!-- Admin actions redirects -->
                <div>
                    <form action="showEditForm.php">
                        <input type="hidden" name="postID" value="<?php echo $row['idblog_posts'];?>">
                        <button type="submit">Edit</button>
                    </form>
                    <form action="processDeletePost.php">
                        <input type="hidden" name="postID" value="<?php echo $row['idblog_posts'];?>">
                        <button type="submit">Delete</button>
                    </form>
                </div>



				<?php
				echo "<hr>";
		}
		} else {
			echo "Error with the SQL " . mysqli_error($link);
		}
	} else {
		echo "Error connecting " . mysqli_error();
	}