<!--
 * Project: Milestone 8
 * Author: Ricardo Monreal
 * Date: February 7, 2021
 -->
<?php
    // database info
	$user = 'root';
	$password = 'root';
	$db = 'milestone8';
	$host = 'localhost';

    function dbConnect()
    {
	    global $host, $user, $password, $db;

	    $link = new mysqli($host, $user, $password, $db);

	    if ($link->connect_error) {
		    echo $link->connect_error;
	    }

	    // return database connection
	    return $link;
    }

    function saveUserId($id) {
    	session_start();
    	$_SESSION['USER_ID'] = $id;
    }

    function getUserId() {
    	session_start();
    	return $_SESSION['USER_ID'];
    }