<!--
 * Project: Milestone 6
 * Author: Ricardo Monreal
 * Date: January 31, 2021
 -->
<!DOCTYPE html>
<html lang="en">
<style>
    h2 {
        text-align: center;
    }
</style>




<?php include('header.php'); ?>
<?php




$FIRST_NAME = $_POST['FIRST_NAME'];
$LAST_NAME = $_POST['LAST_NAME'];
$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];

include 'myfuncs.php';

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

    $link = dbConnect();

    //$query = "INSERT INTO users (FIRST_NAME, LAST_NAME, USERNAME, PASSWORD) VALUES ('$FIRST_NAME', '$LAST_NAME', '$USERNAME', '$PASSWORD')";

	$query = "INSERT INTO users (`ID`, `FIRST_NAME`, `LAST_NAME`, `USERNAME`, `PASSWORD`) VALUES (NULL, '$FIRST_NAME', '$LAST_NAME', '$USERNAME', '$PASSWORD')";
    if (mysqli_query($link, $query)) {
        echo "New user recorded successfully!";
	    header("Refresh: 3; url=index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_errno($link);
    }

    mysqli_close($link);
}

?>

<?php include('footer.php'); ?>
</html>