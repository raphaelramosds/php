<?php

class Vehicle
{
    public string $model;
    public string $color;
    public int $year;

    public function run()
    {
        echo 'Vehicle is running';
    }

    public function stop()
    {
        echo 'Vehicle has stopped';
    }
}

class Car extends Vehicle
{
    public function turnOnWindshield()
    {
        echo 'Wipping windshield';
    }
}

class Motorcycle extends Vehicle
{
    public function popAWhile()
    {
        echo 'Popping a while';
    }
}