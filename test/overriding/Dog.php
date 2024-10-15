<?php
include "Animal.php";
class Dog extends Animal
{
    protected $type = "Dog";  // Overriding property of the parent class

    // Overriding the parent class constructor to add dog-specific behavior
    public function __construct(string $name)
    {
        parent::__construct($name);  // Calling the parent constructor
    }

    // Overriding the makeSound method to provide dog-specific behavior
    public function makeSound(): void
    {
        echo "Woof! Woof! \n";
    }

    // Adding a new method specific to the Dog class
    public function fetch(): void
    {
        echo "{$this->name} is fetching the ball!\n";
    }
}


// Creating an instance of Animal
$animal = new Animal("Generic Animal");
echo $animal->getName();  // Output: Generic Animal
echo PHP_EOL;
$animal->makeSound();     // Output: Some generic animal sound
echo $animal->getType();  // Output: Unknown Animal

// Creating an instance of Dog
$dog = new Dog("Buddy");
echo $dog->getName();     // Output: Buddy
echo PHP_EOL;
$dog->makeSound();        // Output: Woof! Woof!
echo $dog->getType();     // Output: Dog
echo PHP_EOL;
$dog->fetch();            // Output: Buddy is fetching the ball!
