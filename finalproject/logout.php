<?php


?>
<!--
 * Project: Final Project
 * Author: Ricardo Monreal
 * Date: February 14, 2021
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





