<?php
include 'view/header.php';
require_once('model/admin_functions.php');
require_once('model/db_functions.php');
$stories = getStories();

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

          <form action="stories.php" method="POST">


          <div class="input-field">
            <input placeholder="Story Title" name="story_title" id="story_title" type="text" class="validate">
            <label for="story_title">Title</label>
          </div>


          <div class="input-field">
            <input placeholder="Last Name" name="last_name" id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
          </div>


        <div class="input-field">
          <input placeholder="Username" name="username" id="username" type="text" class="validate">
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
          <input placeholder="Address" name="address" id="address" type="text" class="validate">
          <label for="address">Address</label>
        </div>


        <div class="input-field">
          <input placeholder="Age" name="age" id="age" type="number" class="validate">
          <label for="last_name">Age</label>
        </div>


          <div class="input-field">
            <input placeholder="Email" name="email" id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>


        <div class="input-field">
          <input placeholder="Updates" name="email_updates" id="email_updates" type="checkbox" name="updates">
          <label for="email_updates">E-mail Updates</label>
        </div>

        <br><br>

        <!-- Dropdown Trigger -->
  <a class='dropdown-button btn' href='#' data-activates='dropdown1'>User Type</a>

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!">Child/Primary User</a></li>
    <li><a href="#!"><i class="material-icons">view_module</i>Parent/Secondary User</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>Builder</a></li>
  </ul>


        <div class="input-field">
              <br><br>
              <a href="dashboard.html"><button type="submit" onclick="return validate()" value="submit" class="btn cyan darken-2">
  							Submit
  						</button>
            </div>


      </form>
    </div>
    </div>

</div>
</div>

<div class="column" style="height:50px"></div>







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
