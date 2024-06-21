<?php
// Task: Given a few paragraphs in a file, read the file and count how many words are there.

function countWords( $filename ) {
    // Check if the file exists and is readable
    if ( !is_readable( $filename ) ) {
        echo "No file found or file is not readable.";
        return;
    }

    // Open the file for reading
    $file = fopen( $filename, 'r' );

    // Get the size of the file
    $size = filesize( $filename );

    // Check if the file is empty
    if ( $size === 0 ) {
        echo "The file is empty.";
        fclose( $file );
        return;
    }

    // Read the entire content of the file
    $content = fread( $file, $size );

    // Close the file after reading
    fclose( $file );

    // Count the number of words in the content
    $words = str_word_count( $content );

    return $words;
}

// Specify the file path
$filepath = __DIR__ . "/sample.txt";

// Display the word count for the specified file
echo countWords( $filepath ) . " words";