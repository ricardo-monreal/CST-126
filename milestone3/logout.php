<?php

	session_start();

	$_SESSION = array();

	session_destroy();

	echo "<h2>You have been logged out.</h2>";



