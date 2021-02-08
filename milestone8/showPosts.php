<!--
 * Project: Milestone 8
 * Author: Ricardo Monreal
 * Date: February 7, 2021
 -->
<head>
	<link rel="stylesheet" href="css/posts.css">
    <style>
        .comment-block {
            text-align: center;
            border-radius: 5px;
            border: solid 1px #cccccc;
            box-shadow: 1px 2px 5px rgba(0,0,0,.31);
            width: 500px;
            padding-top: 5px;

            margin: 10px auto 10px auto;
        }

        h3 {
            padding-top: 10px;
        }
    </style>
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
    // JOIN to get username of post creator
	$sql_statement = "SELECT * FROM `blog_posts` JOIN `users` ON users.ID = blog_posts.users_ID";


	if ($link){
		$result = mysqli_query($link, $sql_statement);
		if ($result) {
			while ($row = mysqli_fetch_assoc($result)){
				?>
				<div class="post-container"><?php
						echo "Post ID: " . $row['idblog_posts'] . "<hr>";
						echo "<h3>" . $row['blog_post_title'] . " by " . ucfirst($row['USERNAME']) . "</h3>" . "<hr>";
						echo $row['blog_post'] . "<br>";
					?></div>
                <p><u>Comments</u></p>
                <?php
                    $post_id = $row['idblog_posts'];
                    // JOIN TO GET NAME OF COMMENT CREATOR
                    $sql_statement_comments = "SELECT * FROM `comments` JOIN `users` ON users.ID = 
                                             comments.users_ID WHERE `blog_posts_idblog_posts` = '$post_id'";

                    $result_comments = mysqli_query($link, $sql_statement_comments);
                    if ($result_comments) {
                        while ($row_comments = mysqli_fetch_array($result_comments)){
                            ?>
                            <div class="comment-block">

                                <b><?php echo $row_comments['comment_text'] . "<br>"; ?></b>
                                <?php echo "<u>Comment made by user:</u> " . ucfirst($row_comments['USERNAME']) . "<br>";?>

                            </div>
	                        <?php
                        }
                    }


                ?>
                <br>
                <p><u>Add Comment</u></p>
                <form action="processNewComment.php">
                    <input type="hidden" name ="post_id" value ="<?php echo $row['idblog_posts']?>">
                    <textarea name="comments" rows="5" cols="50"></textarea><br>

                    <button type="submt">Submit</button>
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
?>
