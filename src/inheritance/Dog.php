<?php
namespace App\inheritance;

class Dog extends Animal
{
    public function __construct(string $name,  bool $hunt = false)
    {
        parent::__construct($name, $hunt);
    }

    public function makeSound(): void
    {
        echo "Woof! Woof! \n";
    }
}
