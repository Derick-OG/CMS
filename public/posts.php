<?php include "../includes/header.php" ?>
<?php include "../includes/functions.php" ?>
<?php

$posts = getAllPosts();

if (isset($_POST['delete'])) {
  $d = explode(',', base64_decode($_POST['delete']));
  deletePostWithUserId($d[0], $d[1]);
  header("Location: /CMS/public/posts.php");
}
if (isset($_POST['edit'])) {
  $d = explode(',', base64_decode($_POST['edit']));
  editPostWithUserId($d[0], $d[1], "New Post Title",'NO IMAGE', "Some Description", "Some Content");
  header("Location: /CMS/public/posts.php");
}
if (isset($_POST['newpost'])) {
  newPostWithUserId("New Post Title", "Some Description", "Some Content");
  // header("Location: /CMS/public/posts.php");
}
?>

<div class="container">
  <div class="row">
    <div class="col-12 mb-5">
      <div class="row">
        <div class="col offset-8"></div>
        <div class="col-3">
          <form action="posts.php" method="post">
            <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#myModal1">
        New Post
      </button>
          </form>
        </div>
      </div>
    </div>

    <?php $counter = 0 ?>
    <?php foreach ($posts['posts'] as $post): ?>

      <!-- Single Post Description -->
      <div class="col-12 shadow">
        <div class="py-3 pl-3">
          <h3><?php echo $post[1] ?></h3>
          <h6 class="text-decoration-underline">Description</h6>
          <p>
            <?php echo $post[3] ?>
          </p>

          <div class="row">
            <div class="col-7">
              <span> Author: <?php echo $posts['authors'][$counter];
                              $counter++; ?> </span>
            </div>
            <form method="post" action="posts.php" class="col-5">

              <button class="btn btn-success wl-2" type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#myModal2">
                Edit</button>
            </form>
              <form method="post" action="dashboard.php">
                <button class="btn btn-danger" name="delete"
                  value="<?php echo base64_encode($post[0] . "," . $post[5]) ?>">Delete</button>
              </form>
              <a href="post.php?d=<?php echo base64_encode($post[0]) ?>" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>
      <!-- Single Post Description -->

    <?php endforeach; ?>


    <!-- View more -->
    <div class="col-12 text-center mt-5" style="height: 50px">
      <button class="btn btn-primary">View More...</button>
    </div>
    <!-- View more -->
  </div>
</div>


<?php include "../includes/footer.php" ?>
