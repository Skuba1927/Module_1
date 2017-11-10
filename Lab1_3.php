<?php

//Lab 1.3.3

$days = 6;

switch ($days) {
    case 1:
        echo 'Monday';
        break;
    case 2:
        echo 'Tuesday';
        break;
    case 3:
        echo 'Wednesday';
        break;
    case 4:
        echo 'Thuorsday';
        break;
    case 5:
        echo 'Friday';
        break;
    case 6:
    case 7:
        echo 'Weekend';
        break;
    default:
        echo 'Incorrectly number';
}

echo "<br />";


//Lab 1.3.6

function printHelloMessage() {
    echo "Hello!Welcome again<br />";
}

function printGoodBuyMessage() {
    echo "Buy!Have a nice day<br />";
}
$isWelcome = rand(0, 1);
if ($isWelcome) {
    printHelloMessage();
} else {
    printGoodBuyMessage();
}

function br() {
    echo "<br />";
}
//Lab 1.3.7

function calculateSum1( ...$arr) {
    echo array_sum($arr);
}
function multiply(int $a, int $b ) {
    echo $a * $b;
}
$a = rand(1, 100);
$b = rand(1, 100);
calculateSum1($a, $b);
br();
multiply($a, $b);
br();

//Lab 1.3.8

function getRandomNumber(int $firstNumber, int $secondNumber ) :int {
    return rand($firstNumber, $secondNumber);
}
$firstNumber = getRandomNumber(1, 100);
$secondNumber = getRandomNumber(1, 100);
function calculateSum2( ...$arr) {
    return array_sum($arr);
}
function printingWorks($firstNumber, $secondNumber) {
    $results = calculateSum2($firstNumber, $secondNumber );
    echo $firstNumber ." + ". $secondNumber. " = ". $results;
}
printingWorks($firstNumber, $secondNumber);

// Задача на рекурсию
br();br();br();
function getSum( int $numb) {
    $res = $numb % 10;
    $numb = floor($numb / 10);
    if ($res > 0 ) {
        $res += getSum($numb);
        return $res;
    } else {
        return 0;
    }
}
echo getSum(45622);