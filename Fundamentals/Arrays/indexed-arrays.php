<?php

// Two ways of declaring indexed arrays
$people = ["shaun", "crystal", "ryu"];
$fighters = array("ken", "chun-li", 1);

// Accessing one element
echo "First element: " . $people[0] . "\n";

// Print elements
echo "Elements of " . $people . " are \n";
print_r($people);

// Adding elements
$people[] = 60;
array_push($people, "honda");

// Size of an array
echo "There are " . count($fighters) . " fighters \n";

// Merging arrays
$peopleFighters = array_merge($people, $fighters);
echo "Merged arrays are \n";
print_r($peopleFighters);