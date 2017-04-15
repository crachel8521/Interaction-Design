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

function getStories() {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'SELECT * FROM Stories
            ORDER BY date_posted';
  $statement = $db->prepare($query);
  $statement->execute();
  $stories = $statement->fetchAll();
  $statement->closeCursor();
  return $stories;
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


function createUser($first_name, $last_name, $username, $user_id, $password, $email, $address, $email_updates, $user_type) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'INSERT INTO Accounts
                 (user_id, password, last_name, first_name, username, email, age, address, email_updates, user_type)
              VALUES
                 (:user_id, :password, :last_name, :first_name, :username, :email, :age, :address, :email_updates, :user_type)';
   $statement = $db->prepare($query);
  $statement->bindValue(':user_id', $user_id);
  $statement->bindValue(':password', $password);
  $statement->bindValue(':last_name', $last_name);
  $statement->bindValue(':first_name', $first_name);
  $statement->bindValue(':userName', $username);
	$statement->bindValue(':email', $email);
  $statement->bindValue(':age', $age);
	$statement->bindValue(':address', $address);
  $statement->bindValue(':email_updates', $email_updates);
  $statement->bindValue(':user_type', $user_type);
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

function getUserType($user_name) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'SELECT user_type FROM Accounts
              WHERE user_name = :user_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_name', $user_name);
    $statement->execute();
    $results = $statement->fetch();
    $user_type = $results['user_type'];
    $statement->closeCursor();
    return $user_type;
}

function getPassword($user_name) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'SELECT password FROM Accounts
              WHERE user_name = :user_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_name', $user_name);
    $statement->execute();
    $results = $statement->fetch();
	  $password = $results['password'];
    $statement->closeCursor();
    return $password;
}

function getFirstName($user_name) {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'SELECT first_name FROM Accounts
            WHERE user_name = :user_name';
  $statement = $db->prepare($query);
  $statement->bindValue(':user_name', $user_name);
  $statement->execute();
  $results = $statement->fetch();
  $first_name = $results['first_name'];
  $statement->closeCursor();
  return $first_name;
}

function getLastName($user_name) {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'SELECT last_name FROM Accounts
            WHERE user_name = :user_name';
  $statement = $db->prepare($query);
  $statement->bindValue(':user_name', $user_name);
  $statement->execute();
  $results = $statement->fetch();
  $last_name = $results['last_name'];
  $statement->closeCursor();
  return $last_name;
}

function getSlackName($user_name) {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'SELECT user_sname FROM Accounts
            WHERE user_name = :user_name';
  $statement = $db->prepare($query);
  $statement->bindValue(':user_name', $user_name);
  $statement->execute();
  $results = $statement->fetch();
  $user_sname = $results['user_sname'];
  $statement->closeCursor();
  return $user_sname;
}

function getEmail($user_name) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'SELECT email FROM Accounts
              WHERE user_name = :user_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_name', $user_name);
    $statement->execute();
    $results = $statement->fetch();
    $email = $results['email'];
    $statement->closeCursor();
    return $email;
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

function addStory($story_id, $story_title, $user_id, $story_text, $likes, $date_posted) {
  global $db;
  $query = 'INSERT INTO Stories
               (story_id, story_title, user_id, story_text, likes, date_posted)
            VALUES
               (:story_id, :story_title, :user_id, :story_text; :likes, Now())';
  $statement = $db->prepare($query);
  $statement->bindValue(':story_id', $story_id);
  $statement->bindValue(':story_title', $story_title);
  $statement->bindValue(':user_id', $user_id);
  $statement->bindValue(':story_text', $story_text);
  $statement->bindValue(':likes', $likes);
  $statement->execute();
  $statement->closeCursor();
}
?>
