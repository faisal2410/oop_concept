<?php
include "Animal.php";
include "Swimable.php";
class Fish extends Animal
{
    use Swimmable;

    public function makeSound(): void
    {
        echo "Blub! Blub! \n";
    }
}