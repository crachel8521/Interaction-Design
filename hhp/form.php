<?php
      session_start();

      $db =   $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
      include 'view/header.php';
      echo '<link rel="stylesheet" type="text/css" href="css/custom.css">';

function addUser(password, last_name, first_name, username, email, age, address, email_updates, user_type)
{
if(isset($_POST['submit'])){
    session_start();
  }
  $first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
  $password2 = $_POST['password2'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$email_updates = $_POST['email_updates'];
  $message = "Name: " . $first_name . $last_name . "\r\n". "Email: " .  $email . "\r\n". "Username: " .$username .  "\r\n". "Address:" . $address;

if($password == $password2){

  $query = 'INSERT INTO Accounts
               (user_id, password, last_name, first_name, username, email, age, address, email_updates, user_type)
            VALUES
               (:user_id, :password, :last_name, :first_name, :username, :email, :age, :address, :email_updates, :user_type)';
 $statement = $db->prepare($query);
 echo "Thank you. Service Request Completed. " . $first_name;
 echo "In a few moments, you should be receiving an e-mail to " . $email;
}else{
 echo "Sorry. Your Passwords Do Not Match";
}
  }

  addUser();
  include 'view/footer.php';

?>
