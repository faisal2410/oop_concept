<?php
namespace App\traits;

class Posts
{
    use FileOperations;

    function checkSize($fileName)
    {
        echo $this->getFileSize($fileName);
    }
}

/*
$p = new Posts();
$p->checkSize("posts.txt");
*/ 
