<!DOCTYPE html>
<html>
<head>
</head>
<title> Test Page </title>
<body>
This is a test page for how to do php.

<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$email_updates = $_POST['email_updates'];
$email_to = "washington.thomas3@gmail.com";
$email_subject = "You Are Now Connected!";

mail ($email_to, $email_subject, "From: " .$first_name.$last_name);
echo "Your Message Has Been Sent";


?>
<form action="form.html" method="post">




</form>
</body>
</html>
