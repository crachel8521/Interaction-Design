<?php
require('model/database.php');
require_once('model/admin_fuctions.php');
require_once('model/db_functions.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// if no action specified, default to welcome page test
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'show_welcome';
    }
}

if ($action == 'show_welcome') {
    include('welcome.php');
} else if ($action == 'show_login'){
    include('login.php');
} else if ($action == 'login_user') {
	// verify password is correct, then login.
	$username = filter_input(INPUT_POST, 'username');
	$password = filter_input(INPUT_POST, 'password');
	$dbPassword = getPassword($username);
	$userType = getUserType($username);
	// if username doesnt exist or password doesn't match hash, go back to welcome with login errors
	if(!userExists($userName) || !password_verify($password, $dbPassword)){
		$errors[] = "Invalid user name or password.";
		include('login.php');
	} else {
		// go to home page with user logged in and populate session variables
		$_SESSION['username'] = $username;
		$_SESSION['usertype'] = $usertype;
		$_SESSION['user_id'] = getUserID($username);
		//$_SESSION['userPubInfo']['amenities'] = getMyPubAmenitiesIDs($_SESSION['userPubInfo']['pubID']);
		header("Location: .");
		die();
	}
 if ($action == 'delete_account') {
  	$user_id = filter_input(INPUT_POST, 'user_id', FILTER_VALIDATE_INT);
  	if($user_id = $_SESSION['userPubInfo']['pubID']) {
  		unset($_SESSION['userPubInfo']);
  	}
  	deleteUser($user_id);
  	$users = getUsers();
  	include('admin_accounts.php');
}



?>
