<?php

function reverseWords( $sentence ) {
    if ( $sentence === '' ) {
        return "Empty string.";
    }

    $words = explode( ' ', $sentence );

    foreach ( $words as &$word ) {
        $length = strlen( $word );
        $reversed = '';

        for ( $i = $length - 1; $i >= 0; $i-- ) {
            $reversed .= $word[$i];
        }

        $word = $reversed;
    }

    $reversedSentence = implode( ' ', $words );

    return $reversedSentence;
}

echo "Please enter a sentence: ";
$sentence = trim( fgets( STDIN ) );

echo reverseWords( $sentence );