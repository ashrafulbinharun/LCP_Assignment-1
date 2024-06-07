<?php

// Given a list of integers, find the minimum of their absolute values.
function minValue( $arr ) {
    if ( count( $arr ) === 0 ) {
        echo "Empty array";
        return;
    }

    $min = $arr[0] < 0 ? -$arr[0] : $arr[0];

    for ( $i = 1; $i < count( $arr ); $i++ ) {
        $currentValue = $arr[$i] < 0 ? -$arr[$i] : $arr[$i];
        if ( $min > $currentValue ) {
            $min = $currentValue;
        }
    }
    return $min;
}

$sampleOne = minValue( ['10', '12', '15', '189', '22', '2', '34'] );
$sampleTwo = minValue( ['10', '-12', '34', '12', '-3', '123'] );

echo "Sample Output 1: {$sampleOne}";
echo PHP_EOL;
echo "Sample Output 2: {$sampleTwo}";

// Sample input 1: 10 12 15 189 22 2 34
// Sample output 1: 2

// Sample input 2: 10 -12 34 12 -3 123
// Sample output 2: 3