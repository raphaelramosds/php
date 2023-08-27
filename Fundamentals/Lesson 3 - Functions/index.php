<?php

// With parameters
function formatProduct($product)
{
    echo "{$product["name"]} costs {$product["price"]} \n";
}

// Pre-defined paramater
function sayHello($name = "Raphael")
{
    echo "Good morning $name \n";
}

// Returning values
function formatName($firstName, $secondName)
{
    return "$firstName $secondName";
}

// Calling functions
formatProduct(["name" => "Laptop", "price" => 2500]);

sayHello();

echo "Nome completo: " . formatName("Raphael", "Ramos");
