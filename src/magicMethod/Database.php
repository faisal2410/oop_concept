<?php
namespace App\magicMethod;
class Database
{
    public function __construct(public string $db, private string $dbname, protected string $tablename)
    {
    }

    public function hello()
    {
        return "Hello \n";
    }

    public function __debugInfo()
    {
        echo "Taken the control to print the variables \n";
    }
}
