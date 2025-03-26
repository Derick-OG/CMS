<?php include "../includes/header.php" ?>
<?php include "../includes/functions.php" ?>

<?php
$message="";
?>
<!--Checking to see if information entered to be registered meets the requirement-->
<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(register($name, $email, $password)){

    session_start();
    $message="Account Created Successfully";
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['message'] = $message;
    $_SESSION['status'] = 'logged in';

    header('Location: login.php');
  }
}

?>

<div class="container">
  <div class="shadow mx-auto pb-3" style="width: 350px; margin-bottom: 140px; margin-top: 140px">
    <div class="px-5 py-2">
      <form method="post" action="register.php">
        <br />
        <!-- Name and Email input -->
        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" required class="form-control" />
        <br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required class="form-control" />
        <br>

        <!-- Password input -->
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required class="form-control"/>       
        <br />

        <!-- Register button -->
        <button name="submit" class="btn btn-primary btn-lg" style="margin-left: 80px">Register</button>
      </form>
    </div>
  </div>
</div>



<?php include "../includes/footer.php" ?>