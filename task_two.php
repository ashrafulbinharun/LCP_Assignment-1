<?php
// Task: Given a few paragraphs in a file, read the file and count how many words are there.
function countWords( $filename ) {
    if ( !is_readable( $filename ) ) {
        echo "No file found or file is not readable.";
        return;
    }

    $file = fopen( $filename, 'r' );
    $size = filesize( $filename );
    if ( $size === 0 ) {
        echo "The file is empty.";
        fclose( $file );
        return;
    }

    $content = fread( $file, $size );
    fclose( $file );

    $words = str_word_count( $content );
    return $words;
}

$filepath = __DIR__."/sample.txt";
echo countWords( $filepath )." words";