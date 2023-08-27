<?php 

$file = 'readme.txt';

// PHP can comunicate with the file system of our computer

if (file_exists($file)) {

    // Read file
    echo readfile($file);

    // Copy file
    copy($file, 'readme-copy.txt');

    // Absolute path
    echo realpath($file);

    // File size
    echo filesize($file);

    // Rename file
    // rename($file,'readme-renamed.txt');

    // Delete file
    // unlink($file);

} else {
    echo 'File does not exist';
}

// Create directory
mkdir('quotes');
