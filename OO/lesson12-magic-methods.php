<?php

// Special methods which override PHP's default's action perfomend on an object

// __clone
// __construct
// __invoke
// __tostring
// __get
// __set

class Person
{
    private $name;
    private $age;

    // Set an attribute
    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }

    // Get the value of an attribute
    public function __get($attr)
    {
        return $this->$attr;
    }

    // Called everytime you try to echo this object
    public function __toString()
    {
        return "Name: " . $this->name . "\n" . "Age: " . $this->age . "\n";
    }

    // Called everytime an object is called as a function, e.g, $p()
    public function __invoke()
    {
        return "Person was invoked as a function";
    }
}

$p = new Person();

$p->__set("name", "Raphael");
$p->__set("age", "22");

echo $p->__get("name") . " is " . $p->__get("age") . " years old \n";

echo "Notice that each private attribute was filled: \n";
var_dump($p);

echo "Now, I'm trying to echo this object \n";
echo $p;
