<?php
?>
<!--
 * Project: Final Project
 * Author: Ricardo Monreal
 * Date: February 14, 2021



 NOT USED!!!


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

	<h2>Login was successful: <?php echo " Welcome " . " " . ucfirst($USERNAME) . "!"?></h2>
	<p>
		<a href="whoAmI.php">Who Am I</a>
	</p>

<?php include('footer.php'); ?>
</html>