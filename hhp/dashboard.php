<?php
include 'view/header.php';
require_once('model/admin_functions.php');
require_once('model/db_functions.php');
$events = getEvents();
?>

<div>
  <br><br>
  <div class="lime lighten-2">
    <div class="container-dashboard">
      <br>
    <h3>Welcome Username</h3>
    <p><b>  Slack Username:</b> username</p>
    <br>
  </div>
</div>
<br>

<div class="container-dashboard">
    <ul class="collapsible white" data-collapsible="accordion">
    <li>
      <div class="collapsible-header active"><i class="material-icons">supervisor_account</i>Become a Mentor/Mentee</div>
      <div class="collapsible-body"><span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></span><br><a class="waves-effect waves-light btn cyan darken-2">button</a><br></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">settings_applications</i>Be a Builder</div>
      <div class="collapsible-body"><span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></span><br><a class="waves-effect waves-light btn cyan darken-2">button</a><br></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">swap_horiz</i>Need a Device</div>
      <div class="collapsible-body"><span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></span><br><a class="waves-effect waves-light btn cyan darken-2">button</a><br></div>
    </li>
  </ul>
</div>









<div class="row" style="height:50px"></div>
</div>






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
