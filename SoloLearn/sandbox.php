<?php
    // define a class
    class user {
        // properties (attributes)
        public $name;
        // methods (functions)
        public function sayHello(){
            return $this->name . ' Says Hello';
        }
    }

    // instantiate a user object from the user class
    $user1 = new User();
    $user1->name = 'Moises';

    echo $user1->name;

    echo '<br>';

    echo $user1->sayHello();

    echo '<br>';
    // create a new user

    $user2 = new user();
    $user2->name = 'Ricardo';
    echo $user2->name;
    echo '<br>';
    echo $user2->sayHello();
?>