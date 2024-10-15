<?php

class Animal
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    // Method to make a sound (general for all animals)
    public function makeSound(): void
    {
        echo "Some generic animal sound \n";
    }

    // Method to get the name of the animal
    public function getName(): string
    {
        return $this->name;
    }

    // Property example (protected so that child classes can access it)
    protected $type = "Unknown Animal \n";

    // Method to get the type of the animal
    public function getType(): string
    {
        return $this->type;
    }
}
