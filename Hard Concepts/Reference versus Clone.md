# Reference versus Clone

## Motivation

Say you declare a PHP class Person

```php
class Person 
{
    private string $name;
    private int $age;
    private string $hobbie;

    public function __construct($name, $age, $hobbie) 
    {
        $this->name = $name;
        $this->age = $age;
        $this->hobbie = $hobbie;
    }

    public function setHobbie($hobbie) 
    {
        $this->hobbie = $hobbie;
    }

    public function getHobbie() 
    {
        return $this->hobbie;
    }
}
```

Then, you instantiate a new object that represents your friend, Steve

```php
$steve = new Person("Steve", 22, "Reading books");
```

But, you remember that another friend of yours, Dave, does Hiking as a job and is as old as Steve. So how you're too lazy for instantiating a new object, you just do a simple assignment

```php
$dave = $steve;
$dave->setHobbie("Hiking");
```

But you've notice a problem

```php
$steve->getHobbie(); // output: Hiking

$dave->getHobbie(); // output: Hiking
```

What just happened?

## The problem

The line

```php
$dave = $steve;
```

stored a **reference** to the object `$steve` on `$dave`. So, when you invoked the set method, you actually override Steve's Hobbie. It means that Dave wasn't actually created, once `$dave` is only a pointer (reference)! 

## Solution

In order to actually copy a object, you need to **clone** it

```php
$dave = clone $steve;

$dave->setHobbie("Hiking");
```

Now

```php
$steve->getHobbie(); // output: Reading Books

$dave->getHobbie(); // output: Hiking
```