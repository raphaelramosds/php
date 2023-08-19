<?php

// An Interface only supplies methods signatures 

// If Class A implements an Interface B, then class A must implement

// all methods of Interface B, with no exception

interface IList
{
    public function add($value);

    public function remove($value);

    public function size();

    public function init($value);
}

class ArrayList implements IList
{
    public function add($value)
    {
        print "Adding " . $value . " on an array list";
    }
    public function remove($value)
    {
        print "Removing " . $value . " from an array list";
    }

    public function size()
    {
        print "Size of an array list";
    }

    public function init($value)
    {
        print "Initializing an array list";
    }
}

class LinkedList implements IList
{
    public function add($value)
    {
        print "Adding " . $value . " on an linked list";
    }

    public function remove($value)
    {
        print "Removing " . $value . " from an linked list";
    }

    public function size()
    {
        print "Size of an linked list";
    }

    public function init($value)
    {
        print "Initializing an linked list";
    }
}
