<?php include "../includes/header.php" ?>


<div class="container">
  <div class="shadow mx-auto pb-3" style="width: 350px; margin-bottom: 140px; margin-top: 140px">
    <div class="px-5 py-2">
      <form action="login.html">
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
        <a href="" class="btn btn-primary btn-lg" style="margin-left: 80px">Register</a>
      </form>
    </div>
  </div>
</div>



<?php include "../includes/footer.php" ?>