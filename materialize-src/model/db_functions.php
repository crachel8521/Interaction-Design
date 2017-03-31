<?php
/*
	Login System
*/

function userExists($username) {
    global $db;
    $query = 'SELECT 1 FROM Accounts
			  WHERE username = :username';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
	$exists = $statement->fetch();
	$statement->closeCursor();
    return $exists;
}

function createUser($first_name, $last_name, $username, $user_id, $password, $email, $address, $telephone, $email_updates, $user_type) {
    global $db;
    $query = 'INSERT INTO Accounts
                 (first_name, last_name, username, user_id, password, email, address, telephone, email_updates, user_type)
              VALUES
                 (:first_name, :last_name, :username, :user_id, :password, :email, :address, :telephone, :email_updates, :user_type)';
   $statement = $db->prepare($query);
  $statement->bindValue(':first_name', $first_name);
  $statement->bindValue(':last_name', $last_name);
  $statement->bindValue(':userName', $username);
  $statement->bindValue(':user_id', $user_id);
  $statement->bindValue(':password', $password);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':address', $address);
	$statement->bindValue(':telephone', $telephone);
  $statement->bindValue(':email_updates', $email_updates);
  $statement->bindValue(':user_type', $user_type);
    $statement->execute();
    $statement->closeCursor();
}

function getUserType($user_type) {
    global $db;
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
    global $db;
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
    global $db;
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
    global $db;
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
    global $db;
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
    global $db;
    $query = 'UPDATE Accounts
              SET address = :newAdd
              WHERE address = :address';
    $statement = $db->prepare($query);
    $statement->bindValue(':newAdd', $newAdd);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $statement->closeCursor();
}

function updateTelehone($username, $newTel) {
    global $db;
    $query = 'UPDATE Accounts
              SET telephone = :newTel
              WHERE telephone = :telephone';
    $statement = $db->prepare($query);
    $statement->bindValue(':newTel', $newTel);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $statement->closeCursor();
}
?>
