<?php
require('./model/database.php');
require('./model/db_functions.php');
require('./model/admin_functions.php');

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
} else if ($action == 'delete_account') {
  	$user_id = filter_input(INPUT_POST, 'user_id', FILTER_VALIDATE_INT);
  	if($user_id = $_SESSION['userPubInfo']['pubID']) {
  		unset($_SESSION['userPubInfo']);
  	}
  	deleteUser($user_id);
  	$users = getUsers();
  	include('admin_accounts.php');
}



?>
