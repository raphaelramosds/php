<?php

namespace WebSystem\Product;

class Product
{
    private string $name;
    private string $description;
    private string $version;

    public function __construct($name,$description,$version)
    {
        $this->name = $name;
        $this->description = $description;
        $this->version = $version;
    }

    public function details()
    {
        echo "Details of this software \n";
        echo "Name: " . $this->name . "\n";
        echo "Description: " . $this->description . "\n";
        echo "Version: " . $this->version . "\n";
    }
}
