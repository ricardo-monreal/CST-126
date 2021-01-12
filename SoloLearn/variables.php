<?php
    // single line comment
    # single line comment
    /*

        Multi-line comment


    */

    # Variables
        /*
         *  Prefix $
         *  Start with a letter or an underscore
         *  Only letters, numbers and underscore
         *  Case sensitive
         */
    # Basic Data Types
    $Output = 'Hello World!';
    echo $Output;
    $num1 = 4;
    $num2 = 10;
    $float1 = 3.3;
    $bool1 = true;
    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'World';
    $string3 = 'They\'re here';

    $greeting = $string1 . ' ' . $string2.'!';
    $greeting2 = "$string1 $string2";


    define('GREETING', 'Hello Everyone');


    echo $greeting;
    echo $greeting2;
    echo $sum;
    echo $string3;
    echo GREETING;



