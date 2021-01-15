<?php

	Class User {
		public $name;
		public $age;
		//constructor
		// runs when an object is created
		public function __construct($name, $age){
			echo 'Class ' . __CLASS__ . ' instantiated<br>';
			$this->name = $name;
			$this->age = $age;
			
		}
		
			
		
		// function
		public function sayHello() {
			return $this->name . ' Says Hello';
		}
		// desctructor called when no other references to certain object
		// used for clean up / closing connections
		public function __destruct() 
		{
			echo 'desctructor ran...';
		}

	}

$user1 = new User('Moises', 35);
echo '<br>';
echo $user1->sayHello();

