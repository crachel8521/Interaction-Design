<?php
include 'view/header.php';
//require_once('model/admin_functions.php');
//require_once('model/db_functions.php');
//$events = getEvents();

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

?>

  <div class="row" style="width:20%">
    <br><br><br>
    <!-- Box -->
    <div class="pi-box">
      <form action="index.php" method="post">
        <input type="hidden" name="action" value="login_user" />
        <!-- Email form -->
        <div class="form-group">
          <input type="text" class="form-control" name="user_name" id="user_name" placeholder="User Name" />
        </div>
        <!-- End email form -->

        <!-- Password form -->
        <div class="form-group">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
        </div>
        <!-- End password form -->

        <p>
          <a href="#">
            Forgot password?
          </a>
        </p>

        <!-- Submit button -->
        <p>
          <!-- <button type="submit" class="btn cyan darken-2"> -->
            <input type="submit" name="submit" value="Login" />
          <!-- </button> -->
        </p>
        <!-- End submit button -->
      </form>
    </div>
    <!-- End box -->

    <p>
      Don't have Account? <a href="#">Sign Up</a>
    </p>

  </div>
  <!-- End row -->


  <div class="row" style="height:50px"></div>

  <?php include 'view/footer.php'; ?>
</body>
</html>
