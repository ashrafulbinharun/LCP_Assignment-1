<?php

// Given an integer n, find the sum of the digits of the integer.
function sum( $n ) {
    if ( !is_numeric( $n ) || $n === '' ) {
        echo "Please provide a valid numeric value.";
    }

    $sum = 0;

    while ( $n > 0 ) {
        $sum += $n % 10;
        $n = (int) ( $n / 10 ); // last digit remove
    }
    return $sum;
}

$sampleOne = sum( 62343 );
$sampleTwo = sum( 1000 );

echo "Sample Output 1: {$sampleOne}";
echo PHP_EOL;
echo "Sample Output 2: {$sampleTwo}";

// Sample input 1: 62343
// Sample output 1: 18

// Sample input 2: 1000
// Sample output 2: 1