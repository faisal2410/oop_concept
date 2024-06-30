<?php
namespace App\dependencyInjection;

class Student extends University
{
    public $studentName;

    function __construct($name, University $university)
    {
        $this->studentName = $name;
        $this->universityName = $university->universityName;
    }
}