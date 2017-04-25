<?php
include 'view/header.php';
require_once('model/admin_functions.php');
require_once('model/db_functions.php');

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

?>

  <div class="col s8 offset-s2 cyan lighten-5">
    <br>
    <h1 class="flow-text">Chat with the community.</h1>
    <a class="waves-effect waves-light btn-large cyan darken-2" id="chatButton" href="http://thehelpinghandproject.slack.com">Join Slack</a>
    <br>

    <img class="responsive-img" src="images/character1.png">
  </div>
  <div class="white">
    <br><br><br>
    <h1 class="flow-text">Get to know Slack.</h1>
    <h6 class="center">Slack is a chat where you can connect to members of the community both one-on-one and through groups.</h6>
    <br><br>
    <div class="row">
      <div class="col s6">
        <img class="responsive-img" src="images/slack1.png">
      </div>
      <div class="col s6">
        <p></p>
      </div>
    </div>



    <div class="row" style="height:50px"></div>
  </div>

<?php include 'view/footer.php'; ?>
