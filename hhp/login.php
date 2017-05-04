<?php
include 'view/header.php';
//require_once('model/admin_functions.php');
//require_once('model/db_functions.php');
//$events = getEvents();
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

?>

  <div class="row" style="width:100%">
    <!-- Box -->
    <div class="pi-box">
      <br><br>
      <h4 class="center">Login</h4>

  <br><br>
  <div class="col s0 m3 l5"></div>
      <form action="index.php" method="post" class="col s12 m6 l2">
  <?php
  if(isset($login_error)){
  echo $login_error;}
?>

        <input type="hidden" name="action" value="login_user" />
        <div class="input-field">
          <input placeholder="Username" name="user_name" id="username" type="text" class="validate" required>
          <label for="username">Username</label>
        </div>
        <div class="input-field">
          <input placeholder="Password" name="password2" id="password2" type="password" class="validate"  required>
          <label for="password">Confirm Password</label>
        </div>


        <p>
          <a class="blue-text" href="#">
            Forgot password?
          </a>
        </p>

        <!-- Submit button -->
        <p>
          <!-- <button type="submit" class="btn cyan darken-2"> -->
          <button type="submit" value="submit" class="btn blue lighten-1">
              Submit
            </button>
          <!-- </button> -->
        </p>
        <!-- End submit button -->
        <p>
          Don't have Account? <a class="blue-text" href="#">Sign Up</a>
        </p>
      </form>
    </div>
    <!-- End box -->



  </div>
  <!-- End row -->


  <div class="row" style="height:50px"></div>

  <?php include 'view/footer.php'; ?>
</body>
</html>
