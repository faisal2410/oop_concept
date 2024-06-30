<?php

namespace App\inheritance;

class Animal
{
    public function __construct(protected string $name, protected bool $hunt = false)
    {
    }

    public function doesHunting(): void
    {
        if ($this->hunt) {
            echo "Yes, It hunts! \n";
        } else {
            echo "No, It won't hunts! \n";
        }
    }
}