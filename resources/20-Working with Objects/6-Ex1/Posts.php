<?php


class Posts
{
    public $post;
    function __construct($content)
    {
        $this->post = $content;
    }
}

function copyObject(Posts $obj1, Posts $obj2){
    $obj2->post = $obj1->post;
}

$post1 = new Posts("This is the First Post!");
$post2 = new Posts("This is the Second Post!");
copyObject($post1, $post2);
echo $post2->post;


