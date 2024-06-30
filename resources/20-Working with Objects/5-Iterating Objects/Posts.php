<?php


class Posts
{
    public $post;
    public $hasPost = true;
    function __construct($content)
    {
        $this->post = $content;
    }
    function hello(){
        echo "Hello";
    }
}

$post1 = new Posts("This is the First Post!");

foreach($post1 as $key => $value){
    echo $key . ' => ' . $value;
}

echo PHP_EOL;

var_dump($post1);