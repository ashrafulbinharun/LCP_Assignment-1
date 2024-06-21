<?php

/**
 * Task: Given a sentence, keep the order of the words the same, but reverse the characters of each word.
 * Example: If the given sentence is: ‘I love programming’, the result should be: ‘I evol gnimmargorp’
 */

function reverseWords( $sentence ) {
    // Check if the sentence is empty
    if ( $sentence === '' ) {
        return "Empty string.";
    }

    // Split the sentence into words
    $words = explode( ' ', $sentence );

    // Use array_map with strrev to reverse each word
    $reversedWords = array_map( 'strrev', $words );

    // Join the reversed words back into a sentence
    return implode( ' ', $reversedWords );
}

// Prompt the user to enter a sentence
echo "Please enter a sentence: ";
$sentence = trim( fgets( STDIN ) );

// Output the sentence with each word's characters reversed
echo reverseWords( $sentence );