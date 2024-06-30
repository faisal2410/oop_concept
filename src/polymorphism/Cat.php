<?php
namespace App\polymorphism;

class Cat implements Animal
{
    public function bark()
    {
        echo "Meow! Meow!";
    }
}