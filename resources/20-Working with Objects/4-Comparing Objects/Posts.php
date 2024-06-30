<?php


class Posts
{
    public $post;
    function __construct($content)
    {
        $this->post = $content;
    }


}

function compare1(&$obj1, &$obj2) : bool{
    if($obj1 === $obj2){
        return true;
    }else{
        return false;
    }
}

function compare2(&$obj1, &$obj2) : bool{
    if($obj1 == $obj2){
        return true;
    }else{
        return false;
    }
}


$post1 = new Posts("This is the First Post!");
$post2 = new Posts("This is the First Post!");

echo compare1($post1, $post2) ? "SAME" : "DIFFERENT";
echo PHP_EOL;
echo compare2($post1, $post2) ? "SAME" : "DIFFERENT";
$post2->post = "New Value";
echo PHP_EOL;
$post3 = $post1;
echo compare2($post1, $post3) ? "SAME" : "DIFFERENT";

