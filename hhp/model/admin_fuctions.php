<?php
/*
Admin Functions
*/
require_once('database.php');

function getUsers() {
  $db = new PDO("mysql:host=localhost;dbname=hhp","root","");
  $query = 'SELECT * FROM Accounts
            ORDER BY user_id';
  $statement = $db->prepare($query);
  $statement->execute();
  $users = $statement->fetchAll();
  $statement->closeCursor();
  return $users;
}

function deleteUser($user_ID) {
  global $db;
  $query = 'DELETE FROM Accounts
            WHERE user_id = :user_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':user_id', $user_ID);
  $statement->execute();
  $statement->closeCursor();
}

function deleteBuildProject($builder_sname) {
  global $db;
  $query = 'DELETE FROM builder
            WHERE builder_sname = :builder_sname';
  $statement = $db->prepare($query);
  $statement->bindValue(':builder_sname', $builder_sname);
  $statement->execute();
  $statement->closeCursor();
}


function deleteMentor($mentee_sname) {
  global $db;
  $query = 'DELETE FROM mentor
            WHERE mentee_sname = :mentee_sname';
  $statement = $db->prepare($query);
  $statement->bindValue(':mentee_sname', $mentee_sname);
  $statement->execute();
  $statement->closeCursor();
}

function deleteStories($story_title) {
  global $db;
  $query = 'DELETE FROM Stories
            WHERE story_title = :story_title';
  $statement = $db->prepare($query);
  $statement->bindValue(':story_title', $story_title);
  $statement->execute();
  $statement->closeCursor();
}

function createEvents($event_id, $event_name, $event_desc, $event_type, $event_location) {
  global $db;
  $query = 'INSERT INTO Events
               (event_id, event_name, event_desc, event_type, event_location)
            VALUES
               (:event_id, :event_name, :event_desc, :event_type, :event_location)';
  $statement = $db->prepare($query);
  $statement->bindValue(':event_id', $event_id);
  $statement->bindValue(':event_name', $event_name);
  $statement->bindValue(':event_desc', $event_desc);
  $statement->bindValue(':event_type', $event_type);
  $statement->bindValue(':event_location', $event_location);
  $statement->bindValue(':updatedBy', $updatedBy);
  $statement->execute();
  $statement->closeCursor();
}

function deleteEvents($event_name) {
  global $db;
  $query = 'DELETE FROM Events
            WHERE event_name = :event_name';
  $statement = $db->prepare($query);
  $statement->bindValue(':event_name', $event_name);
  $statement->execute();
  $statement->closeCursor();
}
?>
