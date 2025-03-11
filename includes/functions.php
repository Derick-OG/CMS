<?php

include "../config/database.php";
include "../classes/post.php";
include "../classes/user.php";

$user = new User();
$post = new Post();

// var_dump($user->getAll($connection));
// var_dump($post->getAll($connection));