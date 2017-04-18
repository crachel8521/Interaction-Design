<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/custom.css" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

  <nav class="cyan">
    <div class="container">
      <div class="nav-wrapper">
        <a href="index.html" class="brand-logo">HHP</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </div>
  </nav>

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


  <div class="row" style="width:60%">
    <div class="col s8 offset-s2">

      <form action="index.php" method="POST">
        <input type="hidden" name="action" value="register_user">

        <div class="input-field">
          <input placeholder="First Name" name="first_name" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>


        <div class="input-field">
          <input placeholder="Last Name" name="last_name" id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>


        <div class="input-field">
          <input placeholder="Username" name="user_name" id="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>


        <div class="input-field">
          <input placeholder="Password" name="password" id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>


        <div class="input-field">
          <input placeholder="Confirm Password" name="password2" id="password2" type="password" class="validate">
          <label for="password">Confirm Password</label>
        </div>

        <div class="input-field">
          <input placeholder="Email" name="email" id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>

        <div class="input-field">
          <input placeholder="Address" name="address" id="address" type="text" class="validate">
          <label for="address">Address</label>
        </div>


        <div class="input-field">
          <input placeholder="Age" name="age" id="age" type="number" class="validate">
          <label for="last_name">Age</label>
        </div>

        <div class="input-field">
          <br><br>
        <button type="submit" value="submit" class="btn cyan darken-2">
            Submit
          </button>
        </div>


      </form>
    </div>
  </div>
</div>

<br><br><br>
</div>







<div class="row" style="height:50px"></div>







    <footer class="page-footer cyan">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Help the Helping Hand Project Grow</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Connect</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Google+</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Slack</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        </div>
      </div>
    </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
  </body>
  </html>
