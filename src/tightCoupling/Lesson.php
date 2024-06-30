<?php
namespace App\tightCoupling;

class Lesson
{
    public $lid;
    function __construct($lid)
    {
        $this->lid = $lid;
    }
}