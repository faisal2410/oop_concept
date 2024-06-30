<?php


class Posts
{
    public $post;
    function __construct($content)
    {
        $this->post = $content;
    }
}

//First Seriable in File
/*
$post1 = new Posts("This is the First Post!");
$seriablized = serialize($post1);
echo $seriablized;
file_put_contents( "posts.txt" , $seriablized);
*/

//Second UnSeriable from File into Objects.
$seriablized1 = file_get_contents("posts.txt");
$post2 = unserialize($seriablized1);
echo $post2->post;



