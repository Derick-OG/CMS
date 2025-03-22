<?php

$u_id = 2;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="/public/assets/css/style.css" />
</head>

<body>
  <!-- Header -->
  <nav class="navbar navbar-expand shadow pt-4 pb-4 mb-5">
    <div class="container">
      <a href="/CMS/public/index.php" class="navbar-brand">Brand | User</a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="/CMS/public/dashboard.php" class="nav-link active" aria-current="page">Home</a>
        </li>

        <li class="nav-item">
          <a href="/CMS/public/posts.php" class="nav-link">Posts</a>
        </li>

        <li class="nav-item">
          <a href="/CMS/public/login.php" class="btn btn-primary">Login</a>
        </li>

        <li class="nav-item">
          <a href="/CMS/public/logout.php" class="btn btn-danger" style="margin-left: 10px">Logout</a>
        </li>
        <li class="nav-item">
          <a href="#" class="btn btn-success" style="margin-left: 10px">New Post</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- End of Header -->