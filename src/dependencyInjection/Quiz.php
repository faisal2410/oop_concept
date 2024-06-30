<?php
namespace App\dependencyInjection;


//When new quiz is introduced.
class Quiz extends Lesson
{

    public $qid;
    function __construct($qid, Lesson $lesson, Course $course)
    {
        $this->qid = $qid;
        $this->lid = $lesson ->lid;
        $this->cid = $course->cid;
    }
}