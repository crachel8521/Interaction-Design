<?php
 require('model/database.php');
 require_once('model/admin_functions.php');
 require_once('model/db_functions.php');

if (session_status() == PHP_SESSION_NONE) {
 session_start();
 }

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
   } else if ($action == 'show_dashboard'){
     include('dashboard.php');
   } else if ($action == 'login_user') {
     $user_name = filter_input(INPUT_POST, 'user_name');
     $password = filter_input(INPUT_POST, 'password');
     $dbPassword = getPassword($user_name);
     $usertype = getUserType($user_name);
     $isTrue = userExists($user_name);
     if($isTrue == false){
          $errors[] = "Invalid user name or password.";
          echo 'Im in the IF statement';
          echo $user_name;
          include('login.php');
          echo userExists($user_name);
        } else {
          echo "Im in the ELSE statement";
          $_SESSION['user_name'] = $user_name;
          $_SESSION['usertype'] = $usertype;
          $_SESSION['user_id'] = getUserID($user_name);
          //header("Location: .");
          //die();
          include('login_test.php');
          //include('dashboard.php');
        }

   } else if ($action == 'logout'){
   		$_SESSION = array();
   		session_destroy();
   		header('Location: .');
   } else {
        echo "Im in the last else";
   }


// if ($action == 'show_welcome') {
//   include('welcome.php');
// } else if ($action == 'show_login'){
//   include('login.php');
// } else if ($action == 'login_user') {
//   // verify password is correct, then login.
//   $user_name = filter_input(INPUT_POST, 'user_name');
//   $password = filter_input(INPUT_POST, 'password');
//   $dbPassword = getPassword($user_name);
//   $usertype = getUserType($user_name);
//   echo 'first else';
//   // if username doesnt exist or password doesn't match hash, go back to welcome with login errors
//   if(!userExists($user_name)){
//     $errors[] = "Invalid user name or password.";
//     echo 'Im in the if statement';
//     echo $user_name;
//     include('login.php');
//
//   } else {
//     echo 'I made it to the else';
//     // go to home page with user logged in and populate session variables
//     $_SESSION['username'] = $user_name;
//     $_SESSION['usertype'] = $usertype;
//     $_SESSION['user_id'] = getUserID($user_name);
//     //$_SESSION['userPubInfo']['amenities'] = getMyPubAmenitiesIDs($_SESSION['userPubInfo']['pubID']);
//     header("Location: .");
//     die();
//     include('login_test.php');
//   }
// } else if ($action == 'delete_account') {
//   $user_id = filter_input(INPUT_POST, 'user_id', FILTER_VALIDATE_INT);
//   deleteUser($user_id);
//   $users = getUsers();
//   include('admin_accounts.php');
// } else {
//   $user = 'test';
// }
//


?>
