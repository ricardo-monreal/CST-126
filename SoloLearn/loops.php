<?php
    #LOOPS - Execute code a set number of times

    /*
        For
        While
        Do.. while
        Foreach
    */


    # FOR LOOP
    # Parameters (initializer; condition; increment)
    for ($i = 0; $i <= 10; $i++){
        echo 'Number ' .$i;
        echo '<br>';
    }


    # WHILE LOOP
    # Parameters - condition

    $j = 0;
        while($j < 10) {
            echo $j;
            echo '<br>';
            $j++;
        }

    # DO WHILE LOOPS
    # Paraments - conditon

    $z = 0;
        do {
            echo $z;
            echo '<br>';
            $z++;
        } while($z < 10);


    # FOREACH LOOP

    $people = array('Ricardo' => 'mail@to.com', 'Moises' => 'moises@mail.com', 'Vader' => 'vader@mail.com');

    foreach ($people as $person => $email){
        echo $person; // will print "Ricardo"
        echo '<br>';
        echo $person . ': ' . $email; // will print "Ricardo: mail@to.com"
        echo '<br>';

    }