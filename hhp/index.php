<!DOCTYPE html>
<?php
require_once('model/database.php');
require_once('model/admin_fuctions.php');
require_once('model/db_functions.php');
?>

<html>
<!-- the head section -->
<head>
<meta charset="UTF-8">
<title>Home</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<div>
		<table>
			<tr>
		    	<th>Users</th>
		 	</tr>

<?php $users = getUsers(); ?>

		 	<?php foreach($users as $u) : ?>
	        <tr>
	        	<td>  <?php echo $u['first_name']; ?>  </td>
	        </tr>
			<?php endforeach; ?>
		</table>
	</div>

</body>
</html>
