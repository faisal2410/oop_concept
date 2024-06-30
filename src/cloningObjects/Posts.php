<?php
namespace App\cloningObjects;

class Posts
{
    public $post;
    function __construct($content)
    {
        $this->post = $content;
    }
}

/*

$post1 = new Posts("This is the First Post!");
$post2 = $post1;
$post1->post = "This is modified";
echo $post2->post . PHP_EOL;

$post2 = new Posts("This is the First Post!");
$post3 = clone $post2;
$post2->post = "This is modified";
echo $post3->post . PHP_EOL;


*/ 


/*

function copyObject(Posts $obj1, Posts $obj2){
    $obj2->post = $obj1->post;
}

$post1 = new Posts("This is the First Post!");
$post2 = new Posts("This is the Second Post!");
copyObject($post1, $post2);
echo $post2->post;


*/ 