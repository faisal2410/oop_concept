<?php
namespace App\classes;
class Posts
{


    public function __construct(public string $content)
    {
        echo "This is Constructor. \n";
    }

    public function __destruct()
    {
        echo "This is Destructor \n";
    }
    public function printContent(): Posts
    {
        echo $this->content . "\n";
        return $this;
    }
}


