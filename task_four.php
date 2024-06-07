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
        // space
        for ( $j = 0; $j < ( $n - $i ); $j++ ) {
            echo ' ';
        }

        // stars
        for ( $j = 0; $j < ( $i * 2 ) - 1; $j++ ) {
            echo '*';
        }
        echo PHP_EOL;
    }
}

pyramid( 4 );