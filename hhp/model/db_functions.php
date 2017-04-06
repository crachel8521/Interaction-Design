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

function userExists($username) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'SELECT 1 FROM Accounts
			  WHERE username = :username';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
	$exists = $statement->fetch();
	$statement->closeCursor();
    return $exists;
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

function getUserType($user_type) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'SELECT user_type FROM Accounts
              WHERE user_type = :user_type';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $results = $statement->fetch();
    $user_type = $results['user_type'];
    $statement->closeCursor();
    return $user_type;
}

function getPassword($username) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'SELECT password FROM Accounts
              WHERE username = :username';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $results = $statement->fetch();
	$password = $results['password'];
    $statement->closeCursor();
    return $password;
}

function getEmail($username) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'SELECT email FROM Accounts
              WHERE username = :username';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $results = $statement->fetch();
    $email = $results['email'];
    $statement->closeCursor();
    return $email;
}

function updatePassword($username, $password) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'UPDATE Accounts
              SET password = :password
              WHERE username = :username';
    $statement = $db->prepare($query);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $statement->closeCursor();
}

function updateEmail($username, $newEmail) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'UPDATE Accounts
              SET email = :newEmail
              WHERE username = :username';
    $statement = $db->prepare($query);
    $statement->bindValue(':newEmail', $newEmail);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $statement->closeCursor();
}

function updateAddress($username, $newAdd) {
    $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
    $query = 'UPDATE Accounts
              SET address = :newAdd
              WHERE address = :address';
    $statement = $db->prepare($query);
    $statement->bindValue(':newAdd', $newAdd);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $statement->closeCursor();
}
?>
