<?php

/**
 * Print the following pattern based on the given number n (can be any number).
 */

function pyramid( $n ) {
    if ( $n <= 0 ) {
        echo "Please provide a positive integer greater than zero.";
        return;
    }

    for ( $i = 1; $i <= $n; $i++ ) {
        // Calculate the number of leading spaces
        $spaces = str_repeat( ' ', $n - $i );

        // Calculate the number of stars
        $stars = str_repeat( '*', ( $i * 2 ) - 1 );

        // Print the current level of the pyramid
        echo $spaces . $stars . PHP_EOL;
    }
}

pyramid( 4 );