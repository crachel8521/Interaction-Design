<?php
      session_start();

      include 'view/header.php';
      require('model/database.php');
      echo '<link rel="stylesheet" type="text/css" href="css/custom.css">';

$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'hhp';
mysql_connect( $db_host, $db_username, $db_password) or die(mysql_error());
mysql_select_db($db_name);
?>

<?php

function addUser()
{
if(isset($_POST['submit'])){
    session_start();
  }
  $password = mysql_real_escape_string($_POST['password']);
  $password2 = mysql_real_escape_string($_POST['password2']);
  $last_name = mysql_real_escape_string($_POST['last_name']);
  $first_name =  mysql_real_escape_string($_POST['first_name']);
	$username = mysql_real_escape_string($_POST['username']);
	$address = mysql_real_escape_string($_POST['address']);
	$email = mysql_real_escape_string($_POST['email']);
	$email_updates = mysql_real_escape_string($_POST['email_updates']);
  $message = "Name: " . $first_name .' ' . $last_name . "<br> Email: " .  $email . " <br> Username: " .$username . "<br> Address: " . $address;

  $query = "SELECT * FROM Accounts WHERE last_name = '$last_name'";
  $sqlsearch = mysql_query($query);
  $resultcount = mysql_numrows($sqlsearch);
  if($resultcount == 0){
    $query = 'INSERT INTO Accounts
                 (user_id, password, last_name, first_name, username, email, age, address, email_updates)
              VALUES
                 (:user_id, :password, :last_name, :first_name, :username, :email, :age, :address, :email_updates)'
                               or die(mysql_error());

 echo $message;
 echo "<br> Thank you! Your Registration Has Been Completed, " . $first_name;
 echo " <br> In A Few Moments, You Should Be Receiving An E-mail To: " . $email;
}else{
 echo "Sorry.  This Username Already Exists.  Please Try Again.";
}

  }

  addUser();
  include 'view/footer.php';

?>
