<?php

class Person
{
    public $name;
    public $age;

    public function speak() {
        echo $this->name . " has spoke";
    }
}

$me = new Person();

$me->name = 'Raphael';

$me->age = 21;

$me->speak();