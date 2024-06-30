<?php
namespace App\dependencyInjection;

class Lesson extends Course
{
    public $lid;
    function __construct($lid, Course $course)
    {
        $this->lid = $lid;
        $this->cid = $course->cid;
    }
}