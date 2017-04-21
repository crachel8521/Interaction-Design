<?php
include 'view/header.php';
require_once('model/admin_functions.php');
require_once('model/db_functions.php');

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

?>
<div class="row" style="width:60%">
  <div class="col s8 offset-s2">
    <br><br>
    <h4 class="center">Mentorship Form</h4>

<br><br>
    <form action="index.php" method="POST">
      <input type="hidden" name="action" value="register_user">



      <div class="input-field">
        <input placeholder="Phone Number" name="phone_number" id="phone_number" type="text" class="validate">
        <label for="phone_number">Phone Number</label>
      </div>

    </form>
    </div>
  </div>

<?php include 'view/footer.php'; ?>
