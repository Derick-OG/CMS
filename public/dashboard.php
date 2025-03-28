

<?php include "../includes/header.php" ?>
<?php include "../includes/functions.php" ?>

<?php

if (isset($_POST['delete'])) {
  $d = explode(',', base64_decode($_POST['delete']));
  var_dump(deletePostWithUserId(...$d));
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
    <div class="col-9">
      <h1>Hello, User</h1>
    </div>
    <div class="col-3">
      <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#myModal1">
        New Post
      </button>
    </div>
  </div>
  <br />
  <h3>Your Posts</h3>
  <br />

  <div class="row">
    <!-- Single Post Description -->
    <div class="col-12 shadow">
      <div class="py-3 pl-3">
        <h3>Post Title</h3>
        <h6 class="text-decoration-underline">Description</h6>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam,
          beatae?
        </p>

        <div class="row">
          <div class="col-9">
            <span> Author: Theophilus Mbu </span>
          </div>
          <div class="col-3">
            <button class="btn btn-success wl-2" type="button" class="btn btn-primary" data-bs-toggle="modal"
              data-bs-target="#myModal2" value="<?php echo base64_encode($post[0] . "," . $post[5]) ?>>
              Edit</button>
            <form method=" post" action="dashboard.php">
              <button class="btn btn-danger" name="delete"
                value="<?php echo base64_encode($post[0] . "," . $post[5]) ?>">Delete</button>
              </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Single Post Description -->
    <!-- Single Post Description -->
    <div class="col-12 shadow">
      <div class="py-3 pl-3">
        <h3>Post Title</h3>
        <h6 class="text-decoration-underline">Description</h6>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam,
          beatae?
        </p>

        <div class="row">
          <div class="col-9">
            <span> Author: Theophilus Mbu </span>
          </div>
          <div class="col-3">
            <button class="btn btn-success wl-2" type="button" class="btn btn-primary" data-bs-toggle="modal"
              data-bs-target="#myModal2" value="<?php echo base64_encode($post[0] . "," . $post[5]) ?>>
              Edit</button>
            <form method=" post" action="dashboard.php">
              <button class="btn btn-danger" name="delete"
                value="<?php echo base64_encode($post[0] . "," . $post[5]) ?>">Delete</button>
              </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Single Post Description -->

    <!-- View more -->
    <div class="col-12 text-center mt-5" style="height: 50px">
      <button class="btn btn-primary">View More...</button>
    </div>
    <!-- View more -->
  </div>
  <br />
  <h3>Other Posts</h3>
  <br />

  <div class="row">
    <!-- Single Post Description -->
    <div class="col-12 shadow">
      <div class="py-3 pl-3">
        <h3>Post Title</h3>
        <h6 class="text-decoration-underline">Description</h6>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam,
          beatae?
        </p>

        <div class="row">
          <div class="col-9">
            <span> Author: Theophilus Mbu </span>
          </div>

          <div class="col-6 d-flex">
            <button class="btn btn-success wl-2" class="btn btn-primary" data-bs-toggle="modal"
              data-bs-target="#myModal2" value="<?php echo base64_encode($post[0] . "," . $post[5]) ?>>
              Edit
            </button>
            <form method=" post" action="dashboard.php">
              <button class="btn btn-danger" name="delete"
                value="<?php echo base64_encode($post[0] . "," . $post[5]) ?>">Delete</button>
              </form>
              <a href="post.php?d=<?php echo base64_encode($post[0]) ?>" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Single Post Description -->
    <!-- Single Post Description -->
    <div class="col-12 shadow">
      <div class="py-3 pl-3">
        <h3>Post Title</h3>
        <h6 class="text-decoration-underline">Description</h6>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam,
          beatae?
        </p>

        <div class="row">
          <div class="col-6">
            <span> Author: Theophilus Mbu </span>
          </div>

          <div class="col-6 d-flex">
            <button class="btn btn-success wl-2" class="btn btn-primary" data-bs-toggle="modal"
              data-bs-target="#myModal2" value="<?php echo base64_encode($post[0] . "," . $post[5]) ?>>
              Edit
            </button>
            <form method=" post" action="dashboard.php">
              <button class="btn btn-danger" name="delete"
                value="<?php echo base64_encode($post[0] . "," . $post[5]) ?>">Delete</button>
              </form>
              <a href="post.php?d=<?php echo base64_encode($post[0]) ?>" class="btn btn-primary">View More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Single Post Description -->

    <!-- View more -->
    <div class="col-12 text-center mt-5" style="height: 50px">
      <button class="btn btn-primary">View More...</button>
    </div>
    <!-- View more -->
  </div>
</div>

<?php include "../public/modal.php" ?>



<?php include "../includes/footer.php" ?>