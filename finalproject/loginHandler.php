<!--
 * Project: Final Project
 * Author: Ricardo Monreal
 * Date: February 14, 2021
 -->
<?php



session_start();

require_once 'db_connector.php';

if ($link) {
    $attemptedLoginName = $_POST['USERNAME'];
    $attemptedPassword = $_POST['PASSWORD'];


	$sql_statement = "SELECT * FROM `users` WHERE `USERNAME` = '$attemptedLoginName' AND `PASSWORD` = '$attemptedPassword' LIMIT 1";
	$result = mysqli_query($link, $sql_statement);

	if ($result) {
		if (mysqli_num_rows($result) == 1) {
			//echo "Login successful<br>";
			$row = mysqli_fetch_assoc($result);
			$_SESSION['USERNAME'] = $row['USERNAME'];
			$_SESSION['ID'] = $row['ID'];
			$_SESSION['role'] = $row['role'];
			header('Location: index.php');
		}
		else {
			echo "Login unsuccessful<br>";
			exit;
		}
	}
	else {
		echo "error" . mysqli_error($link);
		exit;
	}
}
else {
	echo "Error connecting " . mysqli_connect_errno();
	exit;
}
?>
}
/*
include 'myfuncs.php';

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
    //check back here, might lead to errors
    //$_SESSION['USERNAME'] = $row['USERNAME'];
    //$_SESSION['USER_ID'] = $row['ID'];
    header('Refresh: 5; URL=main.php');


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




*/?>