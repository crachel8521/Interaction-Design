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

function deleteByUserId($user_ID) {
  global $db;
  $query = 'DELETE FROM Accounts
            WHERE user_id = :user_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':user_id', $user_ID);
  $statement->execute();
  $statement->closeCursor();
}

function deleteByUserName($user_Name) {
  global $db;
  $query = 'DELETE FROM Accounts
            WHERE user_name = :user_name';
  $statement = $db->prepare($query);
  $statement->bindValue(':user_name', $user_Name);
  $statement->execute();
  $statement->closeCursor();
}

function deleteBuildStatus($builder_user_id) {
  global $db;
  $query = 'DELETE FROM builder
            WHERE builder_user_id = :builder_user_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':builder_user_id', $builder_user_id);
  $statement->execute();
  $statement->closeCursor();
}

function addBuildStatus($builder_user_id, $recipient_user_id, $builder_name, $status_update, $status_desc) {
  global $db;
  $query = 'INSERT INTO Builder_Status
           (builder_user_id, recipient_user_id, builder_name, status_update, status_desc, date_posted)
            VALUES
               (:builder_user_id, :recipient_user_id, :builder_name, :status_update, :status_desc, Now())';
  $statement = $db->prepare($query);
  $statement->bindValue(':builder_user_id', $builder_user_id);
  $statement->bindValue(':recipient_user_id', $recipient_user_id);
  $statement->bindValue(':builder_name', $builder_name);
  $statement->bindValue(':status_update', $status_update);
  $statement->bindValue(':status_desc', $status_desc);
  $statement->execute();
  $statement->closeCursor();
}

function createMentor($mentor_id ,$mentee_id) {
  global $db;
  $query = 'INSERT INTO mentor
			(mentor_id, mentee_id)
            VALUES
               (:mentor_id, :mentee_id)';
  $statement = $db->prepare($query);
  $statement->bindValue(':mentor_id', $mentor_id);
  $statement->bindValue(':mentee_id', $mentee_id);
  $statement->execute();
  $statement->closeCursor();
}

function deleteMentor($mentee_id) {
  global $db;
  $query = 'DELETE FROM mentor
            WHERE mentee_id = :mentee_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':mentee_id', $mentee_id);
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

function createEvents($event_id, $event_name, $event_desc, $event_type, $event_location, $event_link) {
  global $db;
  $query = 'INSERT INTO Events
               (event_id, event_name, event_desc, event_type, event_location, event_link)
            VALUES
               (:event_id, :event_name, :event_desc, :event_type, :event_location, :event_link)';
  $statement = $db->prepare($query);
  $statement->bindValue(':event_id', $event_id);
  $statement->bindValue(':event_name', $event_name);
  $statement->bindValue(':event_desc', $event_desc);
  $statement->bindValue(':event_type', $event_type);
  $statement->bindValue(':event_location', $event_location);
  $statement->bindValue(':event_link', $event_link);
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
