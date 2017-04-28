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
   } else if ($action == 'show_storiesform'){
     include('storiesform.php');
   } else if ($action == 'show_stories'){
     include('stories.php');
   } else if ($action == 'show_chat'){
     include('chat.php');
   } else if ($action == 'login_user') {
     $user_name = filter_input(INPUT_POST, 'user_name');
     $password = filter_input(INPUT_POST, 'password');
     $user_id = getUserID($user_name);
     $usertype = getUserType($user_id);
     $first_name = getFirstName($user_id);
     $last_name = getLastName($user_id);
     $user_sname = getSlackName($user_id);
     $isTrue = userExists($user_name);
     $isPassword = checkPassword($password);
     if($isTrue == false || $isPassword == false){
          $login_error = "Invalid user name or password.";
          include('login.php');
        } else {
          $_SESSION['user_name'] = $user_name;
          $_SESSION['usertype'] = $usertype;
          $_SESSION['user_id'] = getUserID($user_name);
          $_SESSION['first_name'] = $first_name;
          $_SESSION['last_name'] = $last_name;
          $_SESSION['user_sname'] = $user_sname;
          //header("Location: .");
          //die();
          include('dashboard.php');
          //include('dashboard.php');
        }
   } else if ($action == 'register_user'){
     $user_name = filter_input(INPUT_POST, 'user_name');
     $first_name = filter_input(INPUT_POST, 'first_name');
     $last_name = filter_input(INPUT_POST, 'last_name');
     $password = filter_input(INPUT_POST, 'password');
     $password2 = filter_input(INPUT_POST, 'password2');
     $email = filter_input(INPUT_POST, 'email');
     $address = filter_input(INPUT_POST, 'address');
     $age = filter_input(INPUT_POST, 'age');
     if ($password != $password2)
      {
      $passwordmatch_error = "Password does not match";
      include('form.php');
     }
     else{
     createUser($user_name, $first_name, $last_name, $password, $email, $address, $age);
     include('login.php');
   }
   } else if ($action == 'add_story'){
      $story_title = filter_input(INPUT_POST, 'story_title');
      $story_text = filter_input(INPUT_POST, 'story_text');
      insertStory($story_title,$story_text);
     $action = '';
     header('Location: .?action=show_stories');
     //include('stories.php');
   } else if ($action == 'logout'){
   		$_SESSION = array();
   		session_destroy();
   		header('Location: .');
   } else {
        echo "Im in the last else";
   }

?>
