<?php
include 'view/header.php';
require_once('model/admin_fuctions.php');
require_once('model/db_functions.php');
$events = getEvents();
?>

<div class="row" style="width:20%">
<br><br><br>
    <!-- Box -->
    <div class="pi-box">

      <!-- Email form -->
      <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail" placeholder="User Name">
        </div>
      <!-- End email form -->

      <!-- Password form -->
      <div class="form-group">
        <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
      </div>
      <!-- End password form -->

      <p>
        <a href="#">
          Forgot password?
        </a>
      </p>

      <!-- Submit button -->
      <p>
        <a href="dashboard.html"><button type="submit" class="btn cyan darken-2">
          Sign In
        </button></a>
      </p>
      <!-- End submit button -->

    </div>
    <!-- End box -->

    <p>
      Don't have Account? <a href="#">Sign Up</a>
    </p>

</div>
<!-- End row -->


<div class="row" style="height:50px"></div>

<?php include 'view/footer.php'; ?>
