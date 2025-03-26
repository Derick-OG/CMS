<?php include "../includes/header.php" ?>
<?php include "../includes/functions.php" ?>
<?php
$message="";

if (isset($_POST['submit'])) {
  $email = $_POST['user'];
  $password = $_POST['password'];
  if (login($email, $password)) {
    header("Location: /CMS/public/dashboard.php");
  } else {
    if(empty($_POST['user'] && empty($_POST['password']))){
   $message= "Enter a valid Email/Password";
    }
  }
}

?>

<div class="container">
  <div class="shadow mx-auto pb-3" style="width: 350px; margin-bottom: 140px; margin-top: 140px">
    <div class="px-5 py-2">
      <form method="post" action="login.php">
        <br />
        <?php
        
        echo '<span style= "color:red;">' . $message .   '</span>';
        $message= "";
        ?>
        <br />
        <!-- User input -->
        <div class="form-floating">
          <input type="text" name="user" id="user" class="form-control" placeholder="example@gmail.com" />
          <label for="user" class="form-label">Email</label>
          <br />
        </div>
        <!-- Password input -->
        <div class="form-floating">
          <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" />
          <label for="password" class="form-label">Password</label>
          <br />
        </div>
        <input type="checkbox" name="checkbox" id="checkbox" class="form-check-label" />
        <!-- Remember me checkbox -->
        <label for="checkbox">Remember me</label>
        <br />
        <br />
        <!-- Login button -->
        <button name="submit" class="btn btn-primary btn-lg" style="margin-left: 90px">Login</button>
      </form>
    </div>
  </div>
</div>


<?php include "../includes/footer.php" ?>