<?php

// Multidimensional array of indexed arrays
$agenda = [
    ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
    ["Free", "Class", "Class", "Class", "Class", "Free", "Free"],
    ["Free", "Free", "Free", "Class", "Class", "Free", "Free"],
];

// Multidimensional array of associative arrays
$posts = [
    ["title" => "Mario Party", "author" => "Mario", "likes" => 30],
    ["title" => "Mario Kart Cheats", "author" => "Toad", "likes" => 25],
    ["title" => "Zelda Hidden Chests", "author" => "Link", "likes" => 50],
];

// Adding new element
$posts[] = ["title" => "GTA Cheats", "author" => "CJ", "likes" => 0];

// Print elements
print_r($posts);

// Remove last element
array_pop($posts);
