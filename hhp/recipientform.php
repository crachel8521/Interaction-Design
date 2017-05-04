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
          <input type="hidden" name="action" value="add_recipientinfo" />

          <div class="input-field">
            <input placeholder="Recipient's First Name" name="recipient_firstname" id="recipient_firstname" type="text" class="validate">
            <label for="recipient_firstname">Recipient's First Name</label>
          </div>
          <div class="input-field">
            <input placeholder="Recipient's Last Name" name="recipient_lastname" id="recipient_lastname" type="text" class="validate">
            <label for="recipient_lastname">Recipient's Last Name</label>
          </div>
          <div class="input-field">
            <input placeholder="Hand Measurement" name="hand_measurement" id="hand_measurement" type="text" class="validate" >
            <label for="hand_measurement">Hand Measurement</label>
          </div>
          <div class="input-field">
            <input placeholder="Full Name" name="filler_name" id="filler_name" type="text" class="validate">
            <label for="filler_name">Applicant's Name</label>
          </div>
          <div class="input-field">
            <input placeholder="Contact Number" name="contact_info" id="contact_info" type="text" class="validate">
            <label for="contact_info">Contact Number</label>
          </div>




        <div class="input-field">
              <button type="submit" onclick="return validate()" value="submit" class="btn blue lighten-1">
  							Request
  						</button>
            </div>

      </form>
    </div>
    </div>

</div>
</div>

<div class="column" style="height:50px"></div>


<?php include 'view/footer.php'; ?>
