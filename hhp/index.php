<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
<meta charset="UTF-8">
<title>Home</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<div class="container">
	<table class="pub-names">
		<tr>
	    	<th>Users</th>
	 	</tr>

        <tr>
        	<td>
                	<?php
									echo "Test";
									$result = mysql_query("SELECT * FROM Accounts WHERE user_id='1' LIMIT 1");
									$row = mysql_fetch_array($result);
									echo $result;
									echo $row;
									echo $row['user_id'];?>
        	</td>
        </tr>



	</table>
</div>
</body>
</html>
