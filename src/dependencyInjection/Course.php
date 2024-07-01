<?php
namespace App\dependencyInjection;


//No Depedency on Course to change anytime now.

class Course
{
    public $cid;
    function __construct($cid)
    {
        $this->cid = $cid;
    }
}


/*


$course = new Course(1);
$lesson = new Lesson(100,$course);

//Dependency Injection
$quiz = new Quiz(1, $lesson, $course);

echo "Course ID: " . $quiz->cid . PHP_EOL;
echo "Lesson ID: " . $quiz->lid . PHP_EOL;
echo "Quiz ID: " . $quiz->qid . PHP_EOL;


*/ 

