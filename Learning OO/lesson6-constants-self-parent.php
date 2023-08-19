<?php

// Constants are accessed by :: operator

// self:: references to the current object

// parent:: references to the object's parent

class GeometricFigure
{
    const name = 'Geometric Figure';

    public function getName()
    {
        echo self::name;
    }
}

class Square extends GeometricFigure
{
    const name = 'Square';

    public function getName()
    {
        echo 'I am a ' . self::name . ' but my parent is a ' . parent::name;
    }
}

$q = new Square;

$q->getName();
