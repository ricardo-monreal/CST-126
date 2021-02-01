<?php
?>
<!--
 * Project: Milestone 5
 * Author: Ricardo Monreal
 * Date: January 31, 2021
 -->
<!DOCTYPE html>
<html lang="en">

            <style>
                h1{
                    text-align: center;
                    padding: 100px;
                    align-content: center;
                }

                p {
                    text-align: center;
                    padding-top: 50px;

                }
                .container {
                    padding-top: 50px;
                }
            </style>
    <?php include('header.php'); ?>
            <div class="container">
            <?php

	            session_start();

	            if (!isset($_SESSION['USERNAME'])) {
		            echo "<h1>Welcome to the CST-126 Milestone Blog!</h1>";
		            '<br>';
		            '<br>';
		            echo "<p>Please login <a href='login.php'>here</a> - Don't have an account? Register <a href='register.php'>here</a></p>";
		            exit;
	            }

	            if (isset($_GET['pageNumber']))
		            $menuChoice = $_GET['pageNumber'];
	            else
		            $menuChoice = 4;

	            if ( $_SESSION['USERNAME']) {
		            require_once 'main.php';

		            switch ($menuChoice) {
			            case 1:
				            require_once 'addPostForm.php';
				            break;
			            case 2:
				            require_once 'searchPostForm.php';
				            break;
			            case 3:
				            require_once 'showAdminPage.php';
				            break;
                        case 4:
                            require_once 'showPosts.php';
                            break;

		            }
	            }
	            else {
		            echo "<h1>My blog</h1>";
		            echo "Please login first <a href='login.php'>Login here</a>";
		            exit;
	            }

            ?>
            </div>


    <?php include('footer.php'); ?>
</html>
