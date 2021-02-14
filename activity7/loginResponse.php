<!--
 * Project: Activity 7
 * Author: Ricardo Monreal
 * Date: February 17, 2021
 *
 -->


<!DOCTYPE html>
<html lang="en">
<style>
    h2, h1{
        text-align: center;
        padding-top: 50px;
    }
    p{
        text-align: center;
        padding-top: 20px;
    }


</style>
<?php include('header.php'); ?>

	<h2>Login was successful: <?php echo " Welcome " . " " . ucfirst($USERNAME) . "!"?></h2>
	<p>
		<a href="whoAmI.php">Who Am I</a>
	</p>
    <br>
<br>
    <h1>Currently Registered users</h1>


        <?php
	        ini_set('display_errors', 1);
	        ini_set('display_startup_errors', 1);
	        error_reporting(E_ALL);
	        require_once('utility.php');

	        insertUsers();
	        $users = getAllUsers();
            include('_displayUsers.php');
        ?>



<?php include('footer.php'); ?>
</html>