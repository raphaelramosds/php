<?php

// One might connect to databases using MySQLi 

// Note. PDO is an intersting approach. You should definely know abou it

// Connect to database
define('HOST', 'localhost');
define('USER', 'shaun');
define('PASSWORD', '1234');
define('DATABASE', 'ninja_pizza');

// Connection
$conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (!$conn) :
    echo "Connection error: " . mysqli_connect_error();
endif;
