<?php
include "Animal.php";
include "Swimable.php";
include "Runnable.php";


// Dog class using multiple traits
class Dog extends Animal
{
    use Swimmable, Runnable;

    public function makeSound(): void
    {
        echo "Woof! Woof! \n";
    }
}
