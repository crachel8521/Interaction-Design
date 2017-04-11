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
</head>

<nav class="cyan">
  <div class="container">
    <div class="nav-wrapper">
      <a href="index.html" class="brand-logo">HHP</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="dashboard.html">Dashboard</a></li>
        <li><a href="events.php">Events</a></li>
        <li><a href="community.html">Stories</a></li>
        <li><a href="chat.html">Chat</a></li>
        <?php
          if($_SESSION['usertype'] == 'admin')
          {?>
            <li>
              <a href=".?action=show_admin">Admin</a>
            </li>
        <?php } ?>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="dashboard.html">Dashboard</a></li>
        <li><a href="events.html">Events</a></li>
        <li><a href="community.html">Stories</a></li>
        <li><a href="chat.html">Chat</a></li>
      </ul>
    </div>
  </div>
</nav>

<body>
  <form method="post" action="test_end.php">
    <input type="text" name="name" value="elizabeth" />
    <input type="submit" value="submit" />
  </form>
</body>
</html>
