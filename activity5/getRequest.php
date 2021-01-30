<?php

	$id = $_GET['id'];
	$mode = $_GET['mode'];

	echo "ID: " . $id;
	echo "<br>";
	echo "Mode: " . $mode;
    echo "<br>";

	if( $_GET["name"] || $_GET["email"] || $_GET["blog_post"])
	{
		echo "Welcome: ". $_GET['name']. "<br />";
		echo "Your Email is: ". $_GET["email"]. "<br />";
		echo "Your Blog Post: " . htmlspecialchars($_GET['blog_post']);
		}