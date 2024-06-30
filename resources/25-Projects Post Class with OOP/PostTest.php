<?php

require_once("Post.php");

$p = new Post();

//Select
var_dump($p->getPosts());
var_dump($p->getPostById(2));

//Insert
$data = ['title' => 'New Post 1', 'content' => 'This is Another Content'];
$p->addPost($data);
var_dump($p->getPosts());

//Update
$data = ['id' => 4, 'title' => '[Updated] New Post 1', 'content' => 'This is Another Content'];
$p->updatePost($data);
var_dump($p->getPosts());


//Delete
$p->deletePost(4);
var_dump($p->getPosts());