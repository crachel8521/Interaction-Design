<?php
      session_start();

      include 'view/header.php';
      echo '<link rel="stylesheet" type="text/css" href="css/custom.css">';

function addUser()
{
if(isset($_POST['submit'])){
    session_start();
  }
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  $last_name = $_POST['last_name'];
  $first_name = $_POST['first_name'];
	$username = $_POST['username'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$email_updates = $_POST['email_updates'];
  $message = "Name: " . $first_name . $last_name . "\r\n". "Email: " .  $email . "\r\n". "Username: " .$username .  "\r\n". "Address:" . $address;

if($password == $password2){

  $query = 'INSERT INTO Accounts
               (user_id, password, last_name, first_name, username, email, age, address, email_updates, user_type)
            VALUES
               (:user_id, :password, :last_name, :first_name, :username, :email, :age, :address, :email_updates, :user_type)';

 $db =   $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
 $statement = $db->prepare($query);
 echo "Thank you. Your Registration Has Been Completed. " . $first_name;
 echo " In A Few Moments, You Should Be Receiving An E-mail To " . $email;
}else{
 echo "Sorry. Your Passwords Do Not Match";
}
  }

  addUser();
  include 'view/footer.php';

?>
