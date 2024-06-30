<?php
namespace App\polymorphism;

class Dog implements Animal
{
    public function bark()
    {
        echo "Woof! Woof!";
    }
}