<?php
?>
<!--
 * Project: Milestone 6
 * Author: Ricardo Monreal
 * Date: January 31, 2021
 -->
<!DOCTYPE html>
<html lang="en">

<style>
    h2, h3{
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

     .post-container {
         text-align: center;
     }
    button {
        width: 100px;
    }

</style>
</style>

<h1>My Blog</h1>
<!-- User Menu -->
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

        <!-- Menu item will only show for Admin users -->
        <?php if ($_SESSION['role'] == 'admin'):?>
            <li class="nav-item">
                <a class="nav-link" href="index.php?pageNumber=2">Search Posts</a>
            </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php?pageNumber=3">Administrator</a>
        </li>
        <?php endif; ?>

    </ul>
    <?php

    ?>

</div>





</html>
