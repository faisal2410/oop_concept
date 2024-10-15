<?php
class Dog
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function makeSound(): void
    {
        echo $this->name . " says Woof! Woof! \n";
    }
}
