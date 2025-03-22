<?php include "../includes/header.php" ?>
<?php include "../includes/functions.php" ?>

<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  register($name, $email, $password);
}

?>

<div class="container">
  <div class="shadow mx-auto pb-3" style="width: 350px; margin-bottom: 140px; margin-top: 140px">
    <div class="px-5 py-2">
      <form method="post" action="register.php">
        <br />
        <br />
        <!-- Name and Email input -->
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" />
        <br />
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" />
        <br />
        <!-- Password input -->
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" />
        <br />
        <br />
        <!-- Register button -->
        <button name="submit" class="btn btn-primary btn-lg" style="margin-left: 80px">Register</button>
      </form>
    </div>
  </div>
</div>



<?php include "../includes/footer.php" ?>