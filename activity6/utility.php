<!--
 * Project: Activity 6
 * Author: Ricardo Monreal
 * Date: February 6, 2021
 *
 -->
<?php
	/*
    * Project: Activity 4
    * Author: Ricardo Monreal
    * Date: January 20, 2021
    *
	*/
	require_once('myfuncs.php');

	function getAllUsers() {
		$link = dbConnect();
		$sqlQuery = "SELECT ID, FIRST_NAME, LAST_NAME FROM users";
		$result = $link->query($sqlQuery);
		$users = array();

		$index = 0;
		while($row = $result->fetch_assoc()) {
			$users[$index] = array(
				$row["ID"], $row["FIRST_NAME"], $row["LAST_NAME"]
			);
			++$index;
		}
		return $users;
		$link->close();
	}

	// take pattern from search.html and fetch all that match pattern
	function getUsersByFirstName($pattern) {
		$link = dbConnect();
		$sqlQuery = "SELECT * FROM users WHERE FIRST_NAME LIKE '%" . $pattern . "%'";
		$result = $link->query($sqlQuery);
		if($result->num_rows == 0) {
			//return;
			//echo "no results found";
			echo "<script>alert('$pattern was not found in database!');</script>";
		}
		return$result->fetch_all();

		$link->close();
	}

?>