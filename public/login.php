<?php include "../includes/header.php" ?>


<div class="container">
  <div class="shadow mx-auto pb-3" style="width: 350px; margin-bottom: 140px; margin-top: 140px">
    <div class="px-5 py-2">
      <form action="login.html">
        <br />
        <br />
        <!-- User input -->
        <div class="form-floating">
          <input type="text" name="user" id="user" class="form-control" placeholder="Name or Email" />
          <label for="user" class="form-label">Name or Email</label>
          <br />
        </div>
        <!-- Password input -->
        <div class="form-floating">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
          <label for="password" class="form-label">Password</label>
          <br />
        </div>
        <input type="checkbox" name="checkbox" id="checkbox" class="form-check-label" />
        <!-- Remember me checkbox -->
        <label for="checkbox">Remember me</label>
        <br />
        <br />
        <!-- Login button -->
        <a href="#" class="btn btn-primary btn-lg" style="margin-left: 90px">Login</a>
      </form>
    </div>
  </div>
</div>


<?php include "../includes/footer.php" ?>