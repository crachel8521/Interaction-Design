<?php
/*
	Login System
*/

function getEvents() {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'SELECT * FROM Events
            ORDER BY event_id';
  $statement = $db->prepare($query);
  $statement->execute();
  $events = $statement->fetchAll();
  $statement->closeCursor();
  return $events;
}

function getStory() {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'SELECT * FROM stories
  inner join accounts on stories.user_id= accounts.user_id
            ORDER BY date_posted';
  $statement = $db->prepare($query);
  $statement->execute();
  $story = $statement->fetchAll();
  $statement->closeCursor();
  return $story;
}

function getBuildStatus($builder_user_id) {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'SELECT * FROM Builder_Status WHERE builder_user_id = :builder_user_id
            ORDER BY date_posted';
  $statement = $db->prepare($query);
  $statement->execute();
  $status = $statement->fetchAll();
  $statement->closeCursor();
  return $status;
}

function getBuildStatusByRecipient($recipient_user_id) {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'SELECT * FROM builder_status WHERE recipient_user_id = :recipient_user_id
            ORDER BY date_posted';
  $statement = $db->prepare($query);
  $statement->bindValue(':recipient_user_id', $recipient_user_id );
  $statement->execute();
  $status = $statement->fetchAll();
  $statement->closeCursor();
  return $status;
}

function insertStatus($status_desc) {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'INSERT into builder_status(builder_user_id, builder_name, status_desc, date_posted)
   VALUES(:builder_user_id, :builder_name, :status_desc, Now())';
  $statement = $db->prepare($query);  
     $statement->bindValue(':builder_user_id', $_SESSION["user_id"]);
  $statement->bindValue(':builder_name', $_SESSION["first_name"]);
  $statement->bindValue(':status_desc', $status_desc);
  $statement->execute();
  $statement->closeCursor();
}

function insertStory($story_title, $story_text) {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'INSERT into stories(story_title, user_id, story_text, date_posted)
   VALUES(:story_title, :user_id, :story_text, Now())';
  $statement = $db->prepare($query);
  $statement->bindValue(':story_title', $story_title);
  $statement->bindValue(':user_id', $_SESSION["user_id"]);
  $statement->bindValue(':story_text', $story_text);
  $statement->execute();
  $statement->closeCursor();
}

function insertRecipientInfo($recipient_firstname,$recipient_lastname,$hand_measurement,$filler_name,$contact_info){
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'INSERT into Recipient_Info(recipient_id,recipient_firstname, recipient_lastname, hand_measurement, filler_name , contact_info, date_posted)
   VALUES(:recipient_id, :recipient_firstname, :recipient_lastname, :hand_measurement, :filler_name, :contact_info, Now())';
  $statement = $db->prepare($query);
  $statement->bindValue(':recipient_id', $_SESSION["user_id"]);
  $statement->bindValue(':recipient_firstname', $recipient_firstname);
  $statement->bindValue(':recipient_lastname', $recipient_lastname);
  $statement->bindValue(':hand_measurement', $hand_measurement);
  $statement->bindValue(':filler_name', $filler_name);
  $statement->bindValue(':contact_info', $contact_info);
  $statement->execute();
  $statement->closeCursor();
}

function getRecipientInfo() {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'SELECT * FROM Recipient_Info WHERE recipient_id = :recipient_id 
            ORDER BY date_posted';
  $statement = $db->prepare($query);
  $statement->bindValue(':recipient_id', $_SESSION["user_id"]);
  $statement->execute();
  $recipient = $statement->fetchAll();
  $statement->closeCursor();
  return $recipient;
}

function userExists($user_name) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'SELECT * FROM Accounts
			  WHERE user_name = :user_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_name', $user_name);
    $statement->execute();
	  $exists = $statement->fetch();
    if ($exists['user_name'] == $user_name) {
	  $statement->closeCursor();
    $isTrue = true;
    }
    else {
      $isTrue = false;
    }
    return $isTrue;
}

function checkPassword($password) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'SELECT * FROM Accounts
			  WHERE password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':password', $password);
    $statement->execute();
	  $exists = $statement->fetch();
    if ($exists['password'] == $password) {
	  $statement->closeCursor();
    $isTrue = true;
    }
    else {
      $isTrue = false;
    }
    return $isTrue;
}


function createUser($user_name, $first_name, $last_name, $password, $email, $address, $age) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'INSERT INTO Accounts
                 (user_id, user_name, password, last_name, first_name, email, address, age, user_type)
              VALUES
                 (:user_id, :user_name, :password, :last_name, :first_name, :email, :address, :age, :user_type)';
   $statement = $db->prepare($query);
     $statement->bindValue(':user_id', NULL);
  $statement->bindValue(':user_name', $user_name);
  $statement->bindValue(':password', $password);
  $statement->bindValue(':last_name', $last_name);
  $statement->bindValue(':first_name', $first_name);
	$statement->bindValue(':email', $email);
  $statement->bindValue(':age', $age);
	$statement->bindValue(':address', $address);
  $statement->bindValue(':user_type', "user");
  $statement->execute();
  $statement->closeCursor();
}

function getUserID($user_name) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'SELECT user_id FROM Accounts
              WHERE user_name = :user_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_name', $user_name);
    $statement->execute();
    $results = $statement->fetch();
    $user_type = $results['user_id'];
    $statement->closeCursor();
    return $user_type;
}

function getUserType($user_id) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'SELECT user_type FROM Accounts
              WHERE user_id = :user_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $user_id);
    $statement->execute();
    $results = $statement->fetch();
    $user_type = $results['user_type'];
    $statement->closeCursor();
    return $user_type;
}

function getPassword($user_id) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'SELECT password FROM Accounts
              WHERE user_id = :user_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $user_id);
    $statement->execute();
    $results = $statement->fetch();
	  $password = $results['password'];
    $statement->closeCursor();
    return $password;
}

function getFirstName($user_id) {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'SELECT first_name FROM Accounts
            WHERE user_id = :user_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':user_id', $user_id);
  $statement->execute();
  $results = $statement->fetch();
  $first_name = $results['first_name'];
  $statement->closeCursor();
  return $first_name;
}

function getLastName($user_id) {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'SELECT last_name FROM Accounts
            WHERE user_id = :user_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':user_id', $user_id);
  $statement->execute();
  $results = $statement->fetch();
  $last_name = $results['last_name'];
  $statement->closeCursor();
  return $last_name;
}

function getSlackName($user_id) {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'SELECT user_sname FROM Accounts
            WHERE user_id = :user_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':user_id', $user_id);
  $statement->execute();
  $results = $statement->fetch();
  $user_sname = $results['user_sname'];
  $statement->closeCursor();
  return $user_sname;
}

function getEmail($user_id) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'SELECT email FROM Accounts
              WHERE user_id = :user_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $user_id);
    $statement->execute();
    $results = $statement->fetch();
    $email = $results['email'];
    $statement->closeCursor();
    return $email;
}

function getMentorshipType($user_id) {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'SELECT mentorship_type FROM Mentor
            WHERE user_id = :user_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':user_id', $user_id);
  $statement->execute();
  $results = $statement->fetch();
  $mentorship_type = $results['mentorship_type'];
  $statement->closeCursor();
  return $mentorship_type;
}

function getMentorID($user_id) {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'SELECT mentor_id FROM Mentor
            WHERE user_id = :user_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':user_id', $user_id);
  $statement->execute();
  $results = $statement->fetch();
  $mentor_id = $results['mentor_id'];
  $statement->closeCursor();
  return $mentor_id;
}

function getMenteeID($user_id) {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'SELECT mentee_id FROM Mentor
            WHERE user_id = :user_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':user_id', $user_id);
  $statement->execute();
  $results = $statement->fetch();
  $mentee_id = $results['mentee_id'];
  $statement->closeCursor();
  return $mentee_id;
}

function updatePassword($user_name, $password) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'UPDATE Accounts
              SET password = :password
              WHERE user_name = :user_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':user_name', $user_name);
    $statement->execute();
    $statement->closeCursor();
}

function updateEmail($user_name, $newEmail) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'UPDATE Accounts
              SET email = :newEmail
              WHERE user_name = :user_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':newEmail', $newEmail);
    $statement->bindValue(':user_name', $user_name);
    $statement->execute();
    $statement->closeCursor();
}

function updateAddress($user_name, $newAdd) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'UPDATE Accounts
              SET address = :newAdd
              WHERE address = :address';
    $statement = $db->prepare($query);
    $statement->bindValue(':newAdd', $newAdd);
    $statement->bindValue(':user_name', $user_name);
    $statement->execute();
    $statement->closeCursor();
}

function addStory($story_id, $story_title, $user_name, $story_text, $likes, $date_posted) {
  global $db;
  $query = 'INSERT INTO Story
               (story_id, story_title, user_name, story_text, likes, date_posted)
            VALUES
               (:story_id, :story_title, :user_name, :story_text; :likes, Now())';
  $statement = $db->prepare($query);
  $statement->bindValue(':story_id', $story_id);
  $statement->bindValue(':story_title', $story_title);
  $statement->bindValue(':user_name', $user_name);
  $statement->bindValue(':story_text', $story_text);
  $statement->bindValue(':likes', $likes);
  $statement->execute();
  $statement->closeCursor();
}
?>
