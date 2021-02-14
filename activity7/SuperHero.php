<!--
 * Project: Activity 7
 * Author: Ricardo Monreal
 * Date: February 17, 2021
 *
 -->
<?php


	class SuperHero
	{
		// class properties
		private $name;
		Private $health;
		Private $isDead;

		//constructor
		public function __construct($name){

			$this->name = $name;
			$this->health = 100;
			$this->isDead = false;
		}

		public function isHeDead() {
			if ($this->isDead) {
				return "dead";
			} else {
				return "alive";
			}
		}

		/**
		 * @return int
		 */
		public function getHealth()
		{
			return $this->health;
		}

		/**
		 * @param int $health
		 */
		public function setHealth($health)
		{
			$this->health = $health;
		}

		public function takeDamage($damageValue)
		{
			$this->health = $this->health - $damageValue;
			if ($this->health <= 0) {
				$this->isDead = true;
			}
		}

		public function attack ($enemy) {
			// random damage value
			$damage = rand(1,10);
			$enemy->takeDamage($damage);
			echo $this->name . " has attacked " . $enemy->name . " and caused " . $damage . " hit points against him <br>";
		}

		/**
		 * @return mixed
		 */
		public function getName()
		{
			return $this->name;
		}

		/**
		 * @param mixed $name
		 */
		public function setName($name)
		{
			$this->name = $name;
		}


	}