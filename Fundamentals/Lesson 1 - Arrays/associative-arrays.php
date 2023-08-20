<?php

// Two ways of declaring associative arrays
$people = [
    "shaun" => 23,
    "crystal" => 32,
    "ryu" => 28
];

$fighters = array(
    "ken" => "orange",
    "chun-li" => "brown"
);

// Accessing one element
echo $people["shaun"] . "\n";

// Print elements
print_r($people);

// Adding elements
$fighters["toad"] = "pink";

// Merging arrays
$peopleFighters = array_merge($people, $fighters);
echo "Merged arrays are \n";
print_r($peopleFighters);