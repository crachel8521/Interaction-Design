<?php
       echo '<link rel="stylesheet" type="text/css" href="css/custom.css">';

if(isset($_POST['submit'])){
  $first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$email_updates = $_POST['email_updates'];
  $message = "Name: " . $first_name . $last_name . "\r\n. "\r\Email: " .  $email .  ;

    //Makes a var named myfile and makes a file named servicerequest.txt
    $myfile = fopen("servicerequest.txt", "w") or die("Unable to open file!");
    //This is what will be written to the file
    fwrite($myfile, $message);
    //This closes the file
    fclose($myfile);
    //If all goes well this will display
    echo "Thank you. Service Request Completed. " . $first_name;
    }


  echo nl2br('<br/><a href="dashboard.html">Go back to the main page</a>.');

?>
