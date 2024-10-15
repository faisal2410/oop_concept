<?php

include "Animal.php";

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

    public function callTest()
    {
        $this->test();
    }
}

$d1=new Dog("Shefard");
$d1->makeSound();
$d1->doesHunting();
$d1->callTest();