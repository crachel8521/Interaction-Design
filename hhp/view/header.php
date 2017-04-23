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


  <nav class="cyan">
    <div class="container">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo">HHP</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <?php
          if(!isset($_SESSION['usertype'])){ ?>
            <li><a href=".?action=show_login">Login</a></li>
            <?php } ?>
            <?php
            if(isset($_SESSION['usertype'])){
              if($_SESSION['usertype'] == 'user')
              {?>
                <li><a href=".?action=show_dashboard">Dashboard</a></li>
                <li><a href=".?action=show_events">Events</a></li>
                <li><a href=".?action=show_stories">Stories</a></li>
                <li><a href=".?action=show_chat">Chat</a></li>
                <li><a href=".?action=logout">Logout</a></li>
                <?php } ?>
                <?php
                if($_SESSION['usertype'] == 'admin')
                {?>
                  <li>
                    <a href=".?action=show_admin">Admin</a>
                  </li>
                  <?php } ?>
                  <?php } ?>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                  <?php
                  if(!isset($_SESSION['usertype'])){ ?>
                    <li><a href=".?action=show_login">Login</a></li>
                    <?php } ?>
                    <?php
                    if(isset($_SESSION['usertype'])){
                      if($_SESSION['usertype'] == 'user')
                      {?>
                        <li><a href=".?action=show_dashboard">Dashboard</a></li>
                        <li><a href=".?action=show_events">Events</a></li>
                        <li><a href=".?action=show_stories">Stories</a></li>
                        <li><a href=".?action=show_chat">Chat</a></li>
                        <li><a href=".?action=logout">Logout</a></li>
                        <?php } ?>
                        <?php
                        if($_SESSION['usertype'] == 'admin')
                        {?>
                          <li>
                            <a href=".?action=show_admin">Admin</a>
                          </li>
                          <?php } ?>
                          <?php } ?>
                    </ul>
                  </div>
                </div>
              </nav>
