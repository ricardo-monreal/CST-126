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
?>