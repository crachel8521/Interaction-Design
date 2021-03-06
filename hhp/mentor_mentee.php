<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/custom.css"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Find A Mentor/Mentee</title>
</head>

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
  if(password.value == ''){
    alert("Please Enter Your Password");
    return false;
  }
  if(email.value == ''){
    alert("Please Enter Your E-mail");
    return false;
  }
  if(text.value == ''){
    alert("Please Enter Something In The Textarea");
    return false;
  }
}
</script>
<body>

  <nav class="cyan">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">HHP</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="events.html">Events</a></li>
            <li><a href="">Stories</a></li>
            <li><a href="chat.html">Chat</a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="events.html">Events</a></li>
            <li><a href="">Stories</a></li>
            <li><a href="chat.html">Chat</a></li>
          </ul>
        </div>
      </div>
    </nav>

  <br><br>
  <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="First Name" id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Last Name" id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Password" id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="E-Mail" id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
          <div class="row">
          <div class="input-field col s12">
            <select>
        <option value="" disabled selected>Select An Option</option>
        <option value="1">Mentor</option>
        <option value="2">Mentee</option>
        <label>Materialize Select</label>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <div class="input-field inline">
              <input id="text" type="textarea" class="validate">
              <label for="email" data-error="wrong" data-success="right">About Me</label>
            </div>
          </div>
        </div>
      </form>
    </div>
</body>

<div class="input-field col s12">
              <br><br>
              <button type="submit" value="submit" class="btn cyan darken-2">
                  Submit
                </button>
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
