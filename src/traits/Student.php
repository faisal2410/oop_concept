<?php
namespace App\traits;

class Student
{
    use DatabaseHelper;
    use StringHelper;

    function connectDB()
    {
        $this->getRecords();
        echo $this->removeSpaces("  This is a test!   ");
    }
}
