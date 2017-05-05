<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/custom.css"/>
  <link type="text/css" rel="stylesheet" href="css/timeline.css"/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

  <ul id="dropdown1" class="dropdown-content">
  <li><a class="dropdown-button black-text text-darken-2" href="#!">Settings</a></li>
  <li><a class="dropdown-button black-text text-darken-2" href=".?action=logout">Logout</a></li>
</ul>
  <ul id="dropdown2" class="dropdown-content">
  <li><a class="dropdown-button black-text text-darken-2" href=".?action=show_events">Events</a></li>
  <li><a class="dropdown-button black-text text-darken-2" href=".?action=show_chat">Chat</a></li>
</ul>
<ul id="dropdown3" class="dropdown-content">
<li><a class="dropdown-button black-text text-darken-2" href=".?action=show_mentorship">Mentorship</a></li>
<li><a class="dropdown-button black-text text-darken-2" href=".?action=show_howto">How To</a></li>
<li><a class="dropdown-button black-text text-darken-2" href="http://www.helpinghandproject.org" target="_blank">The Helping Hand Project</a></li>
<li><a class="dropdown-button black-text text-darken-2" href="http://www.enablingthefuture.org" target="_blank">Enable</a></li>

</ul>
<nav class="z-depth-3 grey lighten-2">
  <div class="container">
  <div class="nav-wrapper">
    <a href="index.php" class="brand-logo black-text text-darken-2">The Builder Community</a>
    <ul class="right hide-on-med-and-down">
      <?php if(!isset($_SESSION['user_name'])){ ?>
        <li><a class="dropdown-button black-text text-darken-2" href=".?action=show_login">Login</a></li>
        <?php } ?>
      <?php if(isset($_SESSION['user_name'])){ ?>
        <li><a class="dropdown-button black-text text-darken-2" href=".?action=show_builders">Builders</a></li>
        <?php if($_SESSION['build_request'] == 0){ ?>
      <li><a class="dropdown-button black-text text-darken-2" href=".?action=show_recipientform">Build Request</a></li>
      <?php } else { ?>
        <li><a class="dropdown-button black-text text-darken-2" href=".?action=show_buildstatus">Build Status</a></li>
        <?php } ?>
      <li><a class="dropdown-button black-text text-darken-2" href="#!" data-activates="dropdown3">Resources<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a class="dropdown-button black-text text-darken-2" href="#!" data-activates="dropdown2">Community<i class="material-icons right">arrow_drop_down</i></a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button black-text text-darken-2" href="#!" data-activates="dropdown1"><img class="circle" src="images/selfiesample.jpg"/><i class="material-icons right">arrow_drop_down</i></a></li>
      <?php } ?>
    </ul>
  </div>
</div>
</nav>
