<!--
 * Project: Activity 7
 * Author: Ricardo Monreal
 * Date: February 17, 2021
 *
 -->
<?php

	require_once('myfuncs.php');

	function getAllUsers()
	{
		$link = dbConnect();
		$sqlQuery = "SELECT ID, FIRST_NAME, LAST_NAME FROM users";
		$result = $link->query($sqlQuery);
		$users = array();

		$index = 0;
		while ($row = $result->fetch_assoc()) {
			$users[$index] = array(
				$row["ID"], $row["FIRST_NAME"], $row["LAST_NAME"]
			);
			++$index;
		}
		return $users;
		$link->close();
	}

	// take pattern from search.html and fetch all that match pattern
	function getUsersByFirstName($pattern)
	{
		$link = dbConnect();
		$sqlQuery = "SELECT * FROM users WHERE FIRST_NAME LIKE '%" . $pattern . "%'";
		$result = $link->query($sqlQuery);
		if ($result->num_rows == 0) {
			//return;
			//echo "no results found";
			echo "<script>alert('$pattern was not found in database!');</script>";
		}
		return $result->fetch_all();

		$link->close();
	}

	// activity 7
	function insertUsers()
	{

		$link = dbConnect();
		// i.	Create an array of users that can be inserted into the 'users' table.
		$users = array(
			array('Harrison', 'Ford', 'solo', 'pass'),
			array('Carrie', 'Fisher', 'leia', 'pass'),
			array('Peter', 'Mayhew', 'chewbacca', 'pass')
		);
		// ii.	Create an SQL Insert statement that uses parameters in the statement.
		$stmt = $link->prepare("INSERT INTO users (FIRST_NAME, LAST_NAME, USERNAME, PASSWORD) VALUES (?,?,?,?)");
        // iii.	Loop over the users array that binds the array data to the SQL Insert statement and executes the SQL
        // prepared statement.
		for ($x = 0; $x < count($users); ++$x) {
		$stmt->bind_param("ssss", $users[$x][0],$users[$x][1],$users[$x][2], $users[$x][3]);
		$stmt->execute();
		}
		$stmt->close();
		$link->close();
	}

?>