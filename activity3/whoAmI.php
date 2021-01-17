<?php
	require_once 'myfuncs.php';
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

<h2>Hello My User ID Is: <?php echo "" . getUserId();?></h2>


<?php include('footer.php'); ?>
</html>
