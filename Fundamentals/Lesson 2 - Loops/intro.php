<?php

// For: we know the array length
$ninjas = ['shaun', 'ryu', 'yoshi'];

for ($i = 0; $i < count($ninjas); $i++) {
    echo $ninjas[$i] . "\n";
}

// Foreach: we don't know the array length
array_push($ninjas, 'ken');
echo "Updated array: \n";

foreach ($ninjas as $ninja) {
    echo $ninja . "\n";
}

// 1th use case: foreach for iterating over associative arrays
$people = [
    "shaun" => 23,
    "ryu" => 28,
    "yoshi" => 32
];

foreach ($people as $person => $age) {
    echo $person . " is " . $age . " old \n";
}

// 2th use case: foreach for iterating over multidimensional arrays
$posts = [
    ["title" => "Mario Party", "author" => "Mario", "likes" => 30],
    ["title" => "Mario Kart Cheats", "author" => "Toad", "likes" => 25],
    ["title" => "Zelda Hidden Chests", "author" => "Link", "likes" => 50],
];

foreach ($posts as $post) {
    echo $post["author"] . " has published ". $post["title"]. "\n";
}

