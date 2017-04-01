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

<body>

  <nav class="cyan">
    <div class="container">
      <div class="nav-wrapper">
        <a href="index.html" class="brand-logo">HHP</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="dashboard.html">Dashboard</a></li>
          <li><a href="events.html">Events</a></li>
          <li><a href="community.html">Stories</a></li>
          <li><a href="chat.html">Chat</a></li>
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

	<?php
	require_once('model/database.php');
	require_once('model/admin_fuctions.php');
	require_once('model/db_functions.php');
	$users = getEvents();
	?>

	<div>
		<table>
			<tr>
		    	<th>Users</th>
		 	</tr>

		 	<?php foreach($users as $u) : ?>
	        <tr>
	        	<td>  <?php echo $u['event_name']; ?>  </td>
	        </tr>
			<?php endforeach; ?>
		</table>
	</div>

</body>
</html>
