<?php
?>
<!--
 * Project: Activity 4
 * Author: Ricardo Monreal
 * Date: January 20, 2021
 *
 -->
<!DOCTYPE html>
<html lang="en">
<title>Login Form</title>
<?php include('header.php'); ?>


<div class="main-block">
    <h1>Login</h1>
    <form action="loginHandler.php" method="post">
        <hr>

        <input type="text" name="USERNAME" id="USERNAME" placeholder="Username" required/>

        <input type="password" name="PASSWORD" id="PASSWORD" placeholder="Password" required/>

        <hr>

        <hr>
        <div class="btn-block">

            <button type="submit" value="Submit">login</button>

            <a href="index.php">Main Menu</a>




        </div>

    </form>
</div>

<?php include('footer.php'); ?>
</html>
