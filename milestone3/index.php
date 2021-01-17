<?php
?>
<!--
 * Project: Milestone 3
 * Author: Ricardo Monreal
 * Date: January 17, 2021
 -->
<!DOCTYPE html>
<html lang="en">

            <style>
                h2.welcomeTest{
                    text-align: center;
                    padding-top: 50px;
                }
                p.welcomeTest {
                    text-align: center;
                    padding-top: 20px;
                }
            </style>
    <?php include('header.php'); ?>
            <div class="container">
            <?php

	            session_start();

	            if (!isset($_SESSION['USERNAME'])) {
		            echo "<h2>Please login first <a href='login.php'> here </a></h2>";
		            exit;
	            }

	            if (isset($_GET['pageNumber']))
		            $menuChoice = $_GET['pageNumber'];
	            else
		            $menuChoice = 3;

	            if ( $_SESSION['USERNAME']) {
		            require_once 'main.php';

		            switch ($menuChoice) {
			            case 1:
				            require_once 'addPostForm.php';
				            break;
			            case 2:
				            require_once 'showAddForm.php';
				            break;
			            case 3:
				            require_once 'showMainWelcome.php';
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
