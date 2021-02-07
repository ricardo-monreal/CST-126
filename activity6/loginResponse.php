<!--
 * Project: Activity 6
 * Author: Ricardo Monreal
 * Date: February 6, 2021
 *
 -->
<?php
    require_once ('utility.php');
?>

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
            $users = getAllUsers();
            include('_displayUsers.php');
        ?>



<?php include('footer.php'); ?>
</html>