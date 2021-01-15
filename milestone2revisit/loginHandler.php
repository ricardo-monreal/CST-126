<!--
 * Project: Milestone 2
 * Author: Ricardo Monreal
 * Date: January 10, 2021
 -->
<?php

$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];

$link = mysqli_connect("localhost", "root", "root", "activity1");


if($link->connect_error) {
    echo "was in here";
    echo $link->connect_error;
}

$sqlQuery = "SELECT * FROM users WHERE USERNAME = " . "'$USERNAME'" . " AND PASSWORD = " . "'$PASSWORD'";

$result = $link->query($sqlQuery);


$rowsReturned = $result->num_rows;

if($rowsReturned === 1) {
    echo '<script>alert("Login was successful")
//        window.location.href="dashboard.php";
        </script>';
} elseif($rowsReturned === 0) {
    echo '<script>alert("Login Failed")</script>';
} elseif ($rowsReturned > 2){
    echo '<script>alert("There are multiple users registered.")</script>';
    echo $link->error;
}
$link->close();
?>