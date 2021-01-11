<!--
 * Project: Milestone 2
 * Author: Ricardo Monreal
 * Date: January 10, 2021
 -->


<?php
include ('navbar.php'); ?>

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
</body>
</html>