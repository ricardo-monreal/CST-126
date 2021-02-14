<!--
 * Project: Activity 7
 * Author: Ricardo Monreal
 * Date: February 17, 2021
 *
 -->

<?php

	require_once 'SuperHero.php';

	$Superman = new SuperHero("Superman");
	$Batman = new SuperHero("Batman");


	while ($Superman->isHeDead() == "alive" && $Batman->isHeDead() == "alive") {
		$Superman->attack($Batman);
		echo $Batman->getName() . " has " . $Batman->getHealth() . " health left.<br>";

		$Batman->attack($Superman);
		echo $Superman->getName() . " has " . $Superman->getHealth() . " health left.<br>";
		echo "<hr>";

	}

	if ($Superman->getHealth() > 0) {
		echo "Superman won the battle " . " with a remaining health of " . $Superman->getHealth()."!";
	} else {
		echo "Batman won the battle " . " with a remaining health of " . $Batman->getHealth()."!";
	}




