<!--
 * Project: Activity 3
 * Author: Ricardo Monreal
 * Date: January 14, 2021
 -->
<?php



include 'myfuncs.php';

$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];

//$link = mysqli_connect("localhost", "root", "root", "activity1");
$link = dbConnect();

$sqlQuery = "SELECT * FROM users WHERE USERNAME = " . "'$USERNAME'" . " AND PASSWORD = " . "'$PASSWORD'";

$result = $link->query($sqlQuery);


$rowsReturned = $result->num_rows;

if($rowsReturned === 1) {
	include ('loginResponse.php');
    //echo '<script>alert("Login was successful")
//        window.location.href="dashboard.php";
      //  </script>';
} elseif($rowsReturned === 0) {
    echo '<script>alert("Login Failed")</script>';
} elseif ($rowsReturned > 2){
    echo '<script>alert("There are multiple users registered.")</script>';
    echo $link->error;
}
$link->close();
?>