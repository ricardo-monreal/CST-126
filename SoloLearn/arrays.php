<?php
    #Array - Variable that holds multiple values
    /*
     *  - Indexed
     *  - Associative
     *  - Multi-dimensional
     *
     *
     */

    // Indexed

    $people = array('Kevin', 'Jeremy', 'Sara');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy'; // add to array
    $cars[] = 'BMW';    // add when you dont know index

    echo count($cars);
echo "<br>";
    print_r($cars);
echo "<br>";
    var_dump($cars);
echo "<br>";

    echo $people[1];
    echo "<br>";
    echo $ids[2];
    echo "<br>";
    echo $cars[1];
    echo "<br>";
    echo $cars[3];
    echo "<br>";
    echo $cars[4];
    echo "<br>";

    // Associative

    $people = array('Ricardo'=>35, 'Moises'=>32, 'Rebeca'=>33);
    $ids = [22 => 'Ricardo', 44=>'Moises', 32=>'Rebeca'];


    echo "<br>";
    echo $people['Moises'];
    echo "<br>";
    echo $ids[32];
    echo "<br>";
    $people['Dwight'] = 45; // add to array
    echo $people['Dwight'];
    echo "<br>";
    print_r($people);
    echo "<br>";
    var_dump($people);


    // Multi-Directional Arrays

    $cars = array(
        array('Honda', 20, 10), // Make, in-stock, sold
        array('Toyota', 30,20),
        array('Mazda', 23, 12),
    );

    echo "<br>";
    echo $cars[1][2]; // [index] [position]
