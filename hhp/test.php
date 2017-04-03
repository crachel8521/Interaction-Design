<?php
include 'view/header.php';
require_once('model/admin_fuctions.php');
require_once('model/db_functions.php');
$events = getEvents();
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
