<?php
namespace App\abstract;
abstract class Car
{
    abstract function applyBreak();

    public function hello()
    {
        echo "Print Hello \n";
    }
}
