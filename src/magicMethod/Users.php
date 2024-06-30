<?php
namespace App\magicMethod;
class Users
{
    public function __construct(private string $username = "")
    {
        echo "Construct method is called \n";
    }

    public function __set($name, $value)
    {
        echo $this->username;
        echo "\n";
        echo "Set method invoked. \n";
    }

    public function __get($name)
    {
        echo "Get method invoked \n";
        return $this->username;
    }

    public function __toString()
    {
        echo "To string method invoked \n";
        return $this->username;
    }

    public function __debugInfo()
    {
        echo "Taken the control to print the variables \n";
    }

    public function __destruct()
    {
        echo "End of t he Class life \n";
    }
}
