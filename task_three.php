<?php

/**
 * Given a sentence, keep the order of the words same, but reverse the characters of each word.
 * Here the order of the words is the same as the given sentence, but the order of the characters in the words is reversed.
 */

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

/**
 * For example, if the given sentence is: ‘I love programming’
 * The result should be: ‘I evol gnimmargorp’
 */