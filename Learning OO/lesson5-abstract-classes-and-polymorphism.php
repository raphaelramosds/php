<?php

// Abstract classes can't be instantiate directly

// They can supply attributtes and methods signatures 

// Note. Not all methods of an abstract classes are abtract!

// Their subclasses extends these properties and implement them

// These subclasses are called concrete classes

abstract class Bank
{
    protected float $balance = 0;

    protected float $balanceLimit;

    protected float $interestRate;

    // Method available for all subclasses
    public function getBalance()
    {
        return $this->balance;
    }

    // Subclasses CAN re-implement this method
    public function withdraw($s)
    {
        $this->balance -= $s;
        print "Widhdrawn " . $s . "\n";
    }

    // Subclasses MUST implement this method
    abstract protected function deposit(int $s);
}

class Itau extends Bank
{
    public function deposit($d)
    {
        // Itau has a tax of 2.5% over deposits
        $this->balance += $d * 0.025;
        print "Deposited " . $d * 0.025 . "\n";
    }
}

class Bradesco extends Bank
{
    public function deposit($d)
    {
        // Bradesco has a tax of 1.5% over deposits
        $this->balance += $d * 0.015;
        print "Deposited " . $d * 0.015 . "\n";
    }
}

// Bradesco and Itau have different implementation of deposit

// So Bank is behaving differently

// That's called Polymorphism