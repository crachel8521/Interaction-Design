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
   } else if ($action == 'show_events'){
     include('events.php');
   } else if ($action == 'show_stories'){
     include('stories.php');
   } else if ($action == 'show_chat'){
     include('chat.html');
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

?>
