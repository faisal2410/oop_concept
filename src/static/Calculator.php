<?php
namespace App\static;

class Calculator
{
    static public $result;
    static public function add($a, $b)
    {
        self::$result = $a + $b;
    }
}
