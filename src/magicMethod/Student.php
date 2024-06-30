<?php
namespace App\magicMethod;

class Student
{
    private $id;

    public function __set($name, $value)
    {
        echo "Set method is not found so this is called. \n";
        echo $name . "\n";
        echo $value . "\n";
    }

    public function __get($name)
    {
        echo "Get method is not found so this is called. \n";
        echo $name . "\n";
    }
}