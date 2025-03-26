<?php include "../includes/header.php" ?>
<?php include "../includes/functions.php" ?>
<?php

$posts = getAllPosts();

if (isset($_POST['delete'])) {
  $d = explode(',', base64_decode($_POST['delete']));
  deletePostWithUserId($d[0], $d[1]);
  header("Location: /CMS/public/posts.php");
}
if (isset($_POST['newpost'])) {
  $title = $_POST['title'];
  $image  = $_POST['image'];
  $description = $_POST['description'];
  $content = $_POST['content'];

  newPostWithUserId("$title","$image", "$description", "$content");
  header("Location: /CMS/public/posts.php");
}
if (isset($_POST['edit'])) {
  $d = explode(',', base64_decode($_POST['edit']));
  $title = $_POST['title'];
  $image  = $_POST['image'];
  $description = $_POST['description'];
  $content = $_POST['content'];

  editPostWithUserId($d[0], $d[1],"$title","$image", "$description", "$content");
  header("Location: /CMS/public/posts.php");
}
?>

<div class="container">
  <div class="row">
    <div class="col-12 mb-5">
      <div class="row">
        <div class="col offset-8"></div>
        <div class="col-3">
          <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#myModal1">
            New Post
          </button>
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
            <div class="col-6">
              <span> Author: <?php echo $posts['authors'][$counter];
                              $counter++; ?> </span>
            </div>
            <div class="col-6 d-flex">
              <button class="btn btn-success wl-2" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#myModal2">
                Edit
              </button>
              <form method="post" action="dashboard.php">
                <button class="btn btn-danger" name="delete"
                  value="<?php echo base64_encode($post[0] . "," . $post[5]) ?>">Delete</button>
              </form>
              <a href="post.php?d=<?php echo base64_encode($post[0]) ?>" class="btn btn-primary">View More</a>
            </div>
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

<?php include "../public/modal.php" ?>



<?php include "../includes/footer.php" ?>