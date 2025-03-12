<?php

include "../config/database.php";
include "../classes/post.php";
include "../classes/user.php";

$user_object = new User();
$post_object = new Post();

// var_dump($user_object->getAll($connection));
// echo "<br>";
// echo "<br>";
// var_dump($post_object->getAll($connection));

function login() {}
function logout() {}
function getAllPosts() {}
function getPostsWithUserId() {}
function getPost($id)
{
  global $post_object;
  global $user_object;
  global $connection;

  $author_id = $post_object->getOne($id, $connection)[0][5] ?: false;
  $post = $post_object->getOne($id, $connection)[0] ?: false;
  $author = $user_object->getOne($author_id, $connection)[0][1] ?: false;
  return ["post" => $post, "author" => $author];
}
function editPostWithUserId() {}
function newPostWithUserId() {}
function deletePostWithUserId() {}
function deleteAllPostsWithUserId() {}
