<!--
 * Project: Milestone 7
 * Author: Ricardo Monreal
 * Date: February 7, 2021
 -->
<?php
	require_once 'db_connector.php';
	session_start();

	$USER_ID = $_SESSION['USER_ID'];
?>

<!DOCTYPE html>
<html lang="en">
<title> Who Am I</title>
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

<h2>Hello My User ID Is: <?php echo "" . $USER_ID;?></h2>


<?php include('footer.php'); ?>
</html>
