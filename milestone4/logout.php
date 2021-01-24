<?php


?>
<!--
 * Project: Milestone 3
 * Author: Ricardo Monreal
 * Date: January 17, 2021
 *
 * This is used as a template file
 -->



<!DOCTYPE html>
<html lang="en">
<style>
	h2 {
		text-align: center;
	}
</style>

<?php include('header.php'); ?>

<?php
	session_start();

	$_SESSION = array();

	session_destroy();

	echo "<h2>You have been logged out.</h2>";
	header("Refresh: 2; url=index.php");


?>
<?php include('footer.php'); ?>
</html>





