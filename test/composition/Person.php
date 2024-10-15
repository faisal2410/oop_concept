<?php
include "Dog.php";
class Person
{
    protected string $name;
    protected Dog $pet;  // Person "has a" Dog

    public function __construct(string $name, Dog $pet)
    {
        $this->name = $name;
        $this->pet = $pet;
    }

    public function introduce(): void
    {
        echo "Hi, my name is " . $this->name . " and this is my dog, " . $this->pet->makeSound();
    }
}


// Create a Dog object
$dog = new Dog("Buddy");

// Create a Person object with a Dog (Person "has a" Dog)
$person = new Person("John", $dog);

// Introduce the person and their pet
$person->introduce();
// Output:
// Hi, my name is John and this is my dog, Buddy says Woof! Woof!