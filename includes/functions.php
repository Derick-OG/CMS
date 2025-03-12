<?php

include "../config/database.php";
include "../classes/post.php";
include "../classes/user.php";

$user = new User();
$post = new Post();

var_dump($user->getAll($connection));
echo "<br>";
echo "<br>";
var_dump($post->getAll($connection));

function login() {}
function logout() {}
function getAllPosts() {}
function getPostsWithUserId() {}
function getPost() {}
function editPostWithUserId() {}
function newPostWithUserId() {}
function deletePostWithUserId() {}
function deleteAllPostsWithUserId() {}
