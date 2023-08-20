<?php

class Person
{
    public $name;
    public $pass;
    private $email;

    public function __construct($name, $pass)
    {
        $this->name = $name;
        $this->pass = $pass;
    }

    public function speak()
    {
        echo $this->name . " has spoke \n";
    }

    public function setEmail($e)
    {
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

$me = new Person("Raphael", random_int(-10, 10));

$me->setEmail("raphael.opensource@gmail.com");

$me->speak();

echo "Raphael's email is" . $me->getEmail();
