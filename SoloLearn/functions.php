<?php
// create simple function
function simpleFunction() {
    echo 'Hello World!';
}
// run simple function
simpleFunction();
echo '<br>';

function sayHello($name = 'World'){
    echo "Hello $name<br>";
}

sayHello('Joe');
sayHello('Moises');
sayHello();

function addNumbers($num1, $num2){
    return $num1 + $num2;
}

echo addNumbers(42, 2);

// By Reference

$myNum = 10;

function addFive($num){
    $num += 5;
}

function addTen(&$num){
    $num += 10;
}

addFive($myNum);

echo "Value: $myNum<br>";

addTen($myNum);

echo "Value: $myNum<br>";