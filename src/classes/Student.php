<?php
namespace App\classes;
/*
1) Create a Student Class
2) Create marks as Student Properties
3) Write examResults() Method of Student Class
4) examResults() method accepts 3 subjects marks
5) Passing Marks for each exam is 35 and Maximum Marks is 100 for each subject.
*/
class Student
{

    const PASSING_MARKS = 35;
    const MAXIMUM_MARKS = 100;

    public function __construct(
        private float $subject1,
        private float $subject2,
        private float $subject3
    ) {
    }

    public function examResults()
    {
        $results = [
            "subject1" => $this->getResult($this->subject1),
            "subject2" => $this->getResult($this->subject2),
            "subject3" => $this->getResult($this->subject3)
        ];

        return $results;
    }

    // Helper method to determine if the mark is passing and valid

    private function getResult($marks)
    {
        if ($marks >= self::PASSING_MARKS && $marks <= self::MAXIMUM_MARKS) {
            return "🏆 Pass";
        } elseif ($marks > self::MAXIMUM_MARKS) {
            return "👎 Invalid Marks";
        } else {
            return "😭 Fail";
        }
    }
}


