<?php
namespace App\magicMethod;

class Teacher
{
    public function __toString(): string
    {
        return "To string method is called. \n";
    }
}

