<!--
 * Project: Activity 6
 * Author: Ricardo Monreal
 * Date: February 6, 2021
 *
 -->
<?php
?>

<!DOCTYPE html>
<html lang="en">
<title>Register</title>

<?php include('header.php'); ?>

<div class="main-block">
    <h1>Register</h1>
    <form action="registerHandler.php" method="post">
        <hr>


        <input type="text" name="FIRST_NAME" id="FIRST_NAME" placeholder="First Name" required><br>


        <input type="text" name="LAST_NAME" id="LAST_NAME" placeholder="Last Name" required><br>


        <input type="text" name="USERNAME" id="USERNAME" placeholder="Username" required/>

        <input type="password" name="PASSWORD" id="PASSWORD" placeholder="Password" required/>
        <br>

        <div class="btn-block">

            <button type="submit" value="Submit">Register</button>
            <a href="index.php">Main Menu</a>
        </div>





    </form>
</div>


<?php include('footer.php'); ?>
</html>
