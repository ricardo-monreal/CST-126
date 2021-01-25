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
    .container {
        text-align: right;
    }
</style>

<h1>My Blog</h1>
<div class="menu-container">
	<?php
		if (!isset($_SESSION['USERNAME'])):
			?>
            <span class="menu-item"><a href="login.php">Login</a></span>
		<?php else: ?>
            <span class="menu-item">Welcome <?php echo ucfirst($_SESSION['USERNAME']).'!' . ''; ?> <container><a href="logout.php">Logout</a></span></container>
		<?php endif;
		?>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?pageNumber=1">Add New Post</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?pageNumber=2">Search Posts</a>
        </li>
        <?php if ($_SESSION['role'] == 'admin'):?>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?pageNumber=3">Administrator</a>
        </li>
        <?php endif; ?>



    </ul>
    <?php

    ?>

    <!--span class="menu-item"><a href="index.php?pageNumber=1">Search</a> </span> | <span class="menu-item"><a href="index.php?pageNumber=2">Add New Recipe</a></span>-->
</div>




</html>
