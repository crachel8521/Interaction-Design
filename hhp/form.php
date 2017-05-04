<?php
include 'view/header.php';
require_once('model/admin_functions.php');
require_once('model/db_functions.php');

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

?>

  <br><br>
  <h4 class="center"> Create Account </h4>
  <br><br>
  <script>
  function validate() {
    var firstName = document.getElementById('first_name');
    var lastName = document.getElementById('last_name');
    var username = document.getElementById('username');
    var password = document.getElementById('password');
    var password2 = document.getElementById('password2');
    var address = document.getElementById('address');
    var email = document.getElementById('email');
    var updates = document.getElementById('email_updates');
    var usertype = document.getElementById('usertype');



    if(first_name.value == ''){
      alert("Please Enter Your First Name");
      return false;
    }
    if(last_name.value == ''){
      alert("Please Enter Your Last Name");
      return false;
    }
    if(username.value == ''){
      alert("Please Enter Your Username");
      return false;
    }
    if(password.value == ''){
      alert("Please Enter Your Password");
      return false;
    }
    if(password2.value == ''){
      alert("Please Confirm Your Password");
      return false;
    }
    if(address.value == ''){
      alert("Please Enter Your Address");
      return false;
    }
    if(age.value == ''){
      alert("Please Enter Your Age");
      return false;
    }
    if(email.value == ''){
      alert("Please Enter Your E-mail");
      return false;
    }
    if(email_updates.value == ''){
      alert("Please Check If You Chose To Receive Updates");
      return false;
    }

  }
  </script>




  <div class="row" style="width:100%">
    <div class="col s0 m3 l4"></div>


      <form action="index.php" method="POST" class="col s12 m6 l4">

       <?php
        if(isset($passwordmatch_error)){
        echo $passwordmatch_error;}
        ?>
        <input type="hidden" name="action" value="register_user">

        <div class="input-field">
          <input placeholder="First Name" name="first_name" id="first_name" type="text" class="validate"  required>
          <label for="first_name">First Name</label>
        </div>


        <div class="input-field">
          <input placeholder="Last Name" name="last_name" id="last_name" type="text" class="validate"  required>
          <label for="last_name">Last Name</label>
        </div>


        <div class="input-field">
          <input placeholder="Username" name="user_name" id="username" type="text" class="validate" required>
          <label for="username">Username</label>
        </div>


        <div class="input-field">
          <input placeholder="Password" name="password" id="password" type="password" class="validate" required>
          <label for="password">Password</label>
        </div>


        <div class="input-field">
          <input placeholder="Confirm Password" name="password2" id="password2" type="password" class="validate"  required>
          <label for="password">Confirm Password</label>
        </div>

        <div class="input-field">
          <input placeholder="Email" name="email" id="email" type="email" class="validate" required>
          <label for="email">Email</label>
        </div>

        <div class="input-field">
          <input placeholder="Address" name="address" id="address" type="text" class="validate" required>
          <label for="address">Address</label>
        </div>


        <div class="input-field">
          <input placeholder="Age" name="age" id="age" type="number" class="validate" required>
          <label for="last_name">Age</label>
        </div>

        <div class="input-field">
          <br>
        <button type="submit" value="submit" class="btn cyan darken-2">
            Submit
          </button>
        </div>


      </form>
  </div>
</div>

<br><br><br>
</div>







<div class="row" style="height:50px"></div>



    <?php include 'view/footer.php'; ?>
