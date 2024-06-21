<?php

// Task: Given an integer n, find the sum of the digits of the integer.
function sum( $n ) {
    // Check if the input is a valid numeric value and not empty
    if ( !is_numeric( $n ) || $n === '' ) {
        echo "Please provide a valid numeric value.";
        return;
    }

    $sum = 0;

    // Loop through each digit of the number
    while ( $n > 0 ) {
        // Add the last digit to the sum
        $sum += $n % 10;
        // Remove the last digit from the number
        $n = (int) ( $n / 10 );
    }

    return $sum;
}

// Sample inputs to test the function
$sampleOne = sum( 62343 );
$sampleTwo = sum( 1000 );

echo "Sample Output 1: {$sampleOne}";
echo PHP_EOL;
echo "Sample Output 2: {$sampleTwo}";

// Sample input 1: 62343
// Sample output 1: 18

// Sample input 2: 1000
// Sample output 2: 1