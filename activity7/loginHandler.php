<!--
 * Project: Activity 7
 * Author: Ricardo Monreal
 * Date: February 17, 2021
 *
 -->
<?php



include 'myfuncs.php';
include 'utility.php';

$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];

//$link = mysqli_connect("localhost", "root", "root", "activity1");
$link = dbConnect();

$sqlQuery = "SELECT * FROM users WHERE USERNAME = " . "'$USERNAME'" . " AND PASSWORD = " . "'$PASSWORD'";

$result = $link->query($sqlQuery);


$rowsReturned = $result->num_rows;


// if authentication is correct
if($rowsReturned === 1) {

    $row = $result->fetch_assoc(); // Read the row from the query
    saveUserId($row["ID"]);        // save the user ID in the sessions

	include ('loginResponse.php');
    //echo '<script>alert("Login was successful")
//        window.location.href="dashboard.php";
      //  </script>';

// if authentication is wrong
} elseif($rowsReturned === 0) {
	include('loginFailed.php');
    echo $message = '<h2>Login Failed!</h2>';

    //echo '<script>alert("Login Failed")</script>';
} elseif ($rowsReturned > 2){
    echo '<script>alert("There are multiple users registered.")</script>';
    echo $link->error;
}
$link->close();




?>