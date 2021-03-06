<!--
 * Project: Milestone 2
 * Author: Ricardo Monreal
 * Date: January 10, 2021
sources: https://www.geeksforgeeks.org/how-to-pop-an-alert-message-box-using-php/
-->

<?php
    $FIRST_NAME = $_POST['FIRST_NAME'];
    $LAST_NAME = $_POST['LAST_NAME'];
    $USERNAME = $_POST['USERNAME'];
    $PASSWORD = $_POST['PASSWORD'];

    $link = mysqli_connect("localhost", "root", "root", "activity1");

    if (empty($_POST['FIRST_NAME'])) {
        echo '<script>alert("The First Name field is required and cannot be blank.")</script>';
    } elseif (empty($_POST['LAST_NAME'])) {
        echo '<script>alert("The Last Name field is required and cannot be blank.")</script>';
    } elseif (empty($_POST['USERNAME'])) {
        echo '<script>alert("The Username field is required and cannot be blank.")</script>';
    } elseif (empty($_POST['PASSWORD'])) {
        echo '<script>alert("The Password field is required and cannot be blank.")</script>';
    } else {

        if (mysqli_connect_errno()) {
            die('Connection Error: (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
        } else {
            echo "Hello " . $_POST["FIRST_NAME"] . $_POST["LAST_NAME"] . ": Your username is " . $_POST["USERNAME"] . "<br>";
        }

        $query = "INSERT INTO users (FIRST_NAME, LAST_NAME, USERNAME, PASSWORD) VALUES ('$FIRST_NAME', '$LAST_NAME', '$USERNAME', '$PASSWORD')";
        if (mysqli_query($link, $query)) {
            echo "New user recorded successfully!";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_errno($link);
        }

        mysqli_close($link);
    }

?>
