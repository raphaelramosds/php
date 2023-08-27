<?php

$file = 'readme.txt';

// PHP can open streams to write on a file or read its content

// The idea is to store a reference to these streams on variables called handle

// Opens read and write stream
$handle = fopen($file, 'a+');

// Read all file
echo fread($handle, filesize($file));

// Display only the first 10 bytes of the file
echo fread($handle, 112);

// Read a single line of the file
echo fgets($handle);

// Read a single character
echo fgetc($handle);

// Writing to a file
fwrite($handle, "\nEverything popular is wrong");

// Close stream
fclose($handle);