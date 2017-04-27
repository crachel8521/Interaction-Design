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
    <!-- Box -->
    <div class="pi-box">
      <br><br>
      <h4 class="center">Login</h4>

  <br><br>
  <?php
  if(isset($login_error)){
  echo $login_error;}
?>
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
          <button type="submit" value="submit" class="btn cyan darken-2">
              Submit
            </button>
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
