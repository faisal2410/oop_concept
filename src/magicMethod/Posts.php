<?php
namespace App\magicMethod;
class Posts
{
    public function __call($name, $arguments)
    {
        echo $name . "\n";
        print_r($arguments);
    }
}
