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





