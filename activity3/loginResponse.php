<?php
?>
<!--
 * Project: Activity 3
 * Author: Ricardo Monreal
 * Date: January 14, 2021
 -->
<!DOCTYPE html>
<html lang="en">
<style>
    h2{
        text-align: center;
        padding-top: 50px;
    }
    p{
        text-align: center;
        padding-top: 20px;
    }
</style>
<?php include('header.php'); ?>

	<h2>Login was successful: <?php echo " " . $USERNAME ?></h2>
	<p>
		<a href="whoAmI.php">Who Am I</a>
	</p>

<?php include('footer.php'); ?>
</html>