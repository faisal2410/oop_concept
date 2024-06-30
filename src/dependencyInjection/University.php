<?php
namespace App\dependencyInjection;

class University
{
    public $universityName;

    function __construct($name)
    {
        $this->universityName = $name;
    }
}


/*

$university = new University('Boston University');
$student = new Student('John', $university);

echo "University Name: " . $student->universityName . PHP_EOL;
echo "Student Name: " . $student->studentName . PHP_EOL;



*/ 