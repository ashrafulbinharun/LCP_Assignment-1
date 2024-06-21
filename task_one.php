<?php

// Given a list of integers, find the minimum of their absolute values.
function minValue( $arr ) {
    // Check if the array is empty
    if ( count( $arr ) === 0 ) {
        echo "Empty array";
        return;
    }

    // Convert all elements in the array to their absolute values
    $absValues = array_map( 'abs', $arr );

    // Find and return the minimum value from the absolute values array
    return min( $absValues );
}

// Sample inputs to test the function
$sampleOne = minValue( [10, 12, 15, 189, 22, 2, 34] );
$sampleTwo = minValue( [10, -12, 34, 12, -3, 123] );

// Display the results for the sample inputs
echo "Sample Output 1: {$sampleOne}";
echo PHP_EOL;
echo "Sample Output 2: {$sampleTwo}";

// Sample input 1: 10 12 15 189 22 2 34
// Sample output 1: 2

// Sample input 2: 10 -12 34 12 -3 123
// Sample output 2: 3