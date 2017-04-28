<?php
include 'view/header.php';
require_once('model/admin_functions.php');
require_once('model/db_functions.php');

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

?>

  <div class="column"></div>
<br><br>
    <div class="containerSmall">
      <div class="row">


        <div class="row" style="width:60%">
          <div class="col s8 offset-s2">

          <form action="index.php" method="post">
          <input type="hidden" name="action" value="add_status" />

          <div class="input-field">
            <input placeholder="Status Description" name="status_desc" id="status_desc" type="text" class="validate">
            <label for="status_desc">Status Update</label>
          </div>




        <div class="input-field">
              <button type="submit" onclick="return validate()" value="submit" class="btn cyan darken-2">
  							Submit
  						</button>
            </div>

      </form>
    </div>
    </div>

</div>
</div>

<div class="column" style="height:50px"></div>


<?php include 'view/footer.php'; ?>
