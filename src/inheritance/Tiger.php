<?php
namespace App\inheritance;

class Tiger extends Animal
{
    public function __construct(string $name, bool $hunt = false)
    {
        parent::__construct($name, $hunt);
    }

    public function makeSound(): void
    {
        echo "Grrrrrr! Grrrrr! \n";
    }
}