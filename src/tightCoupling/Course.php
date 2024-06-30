<?php
namespace App\tightCoupling;
//Change Everything from starting.
class Course
{
    public $cid;
    public $lidObj;
    function __construct($cid, $lid)
    {
        $this->cid = $cid;
        $this->lidObj = new Lesson($lid);
    }
}


/*
$course = new Course(1, 100);
echo "Lesson ID: " . $course->lidObj->lid . PHP_EOL;

*/ 