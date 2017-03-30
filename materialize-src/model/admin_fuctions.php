<?php
/*
Admin Functions
*/

function getUsers() {
  global $db;
  $query = 'SELECT * FROM Accounts
      ORDER BY userName';
  $statement = $db->prepare($query);
  $statement->execute();
$users = $statement->fetchAll();
$statement->closeCursor();
  return $users;
}

function deleteUser($userID) {
  global $db;
  $query = 'DELETE FROM Accounts
            WHERE user_id = :user_id';
  $statement = $db->prepare($query);
  $statement->bindValue(':userID', $userID);
  $statement->execute();
  $statement->closeCursor();
}

function deletePub($pubID) {
  global $db;
  $query = 'DELETE FROM Pubs
            WHERE pubID = :pubID';
  $statement = $db->prepare($query);
  $statement->bindValue(':pubID', $pubID);
  $statement->execute();
  $statement->closeCursor();
}

function deleteAmentiesForPubs($amenityID) {
  global $db;
  $query = 'DELETE FROM PubAmenity
            WHERE amenityID = :amenityID';
  $statement = $db->prepare($query);
  $statement->bindValue(':amenityID', $amenityID);
  $statement->execute();
  $statement->closeCursor();
}

function deletePubAmenities($pubID) {
  global $db;
  $query = 'DELETE FROM PubAmenity
            WHERE pubID = :pubID';
  $statement = $db->prepare($query);
  $statement->bindValue(':pubID', $pubID);
  $statement->execute();
  $statement->closeCursor();
}

function createCrawl($crawlName, $crawlDate, $crawlBeginTime, $crawlEndTime, $crawlDescription
      , $crawlLink, $createDate, $updatedBy) {
  global $db;
  $query = 'INSERT INTO Crawls
               (crawlName, crawlDate, crawlBeginTime, crawlEndTime, createDate
                  , updatedBy, updateDate, crawlDescription, crawlLink)
            VALUES
               (:crawlName, :crawlDate, :crawlBeginTime, :crawlEndTime, :createDate
                  , :updatedBy, :createDate, :crawlDescription, :crawlLink)';
  $statement = $db->prepare($query);
  $statement->bindValue(':crawlName', $crawlName);
  $statement->bindValue(':crawlDate', $crawlDate);
  $statement->bindValue(':crawlBeginTime', $crawlBeginTime);
  $statement->bindValue(':crawlEndTime', $crawlEndTime);
  $statement->bindValue(':createDate', $createDate);
  $statement->bindValue(':updatedBy', $updatedBy);
  $statement->bindValue(':crawlDescription', $crawlDescription);
  $statement->bindValue(':crawlLink', $crawlLink);
  $statement->execute();
  $statement->closeCursor();
}

function deleteCrawl($crawlID) {
  global $db;
  $query = 'DELETE FROM Crawls
            WHERE crawlID = :crawlID';
  $statement = $db->prepare($query);
  $statement->bindValue(':crawlID', $crawlID);
  $statement->execute();
  $statement->closeCursor();
}

function getAmenities() {
  global $db;
  $query = 'SELECT * FROM Amenities
            ORDER BY description';
  $statement = $db->prepare($query);
  $statement->execute();
  $amenities = $statement->fetchAll(PDO::FETCH_ASSOC);
  $statement->closeCursor();
  return $amenities;
}

function createAmenity($amenityDescription) {
  global $db;
  $query = 'INSERT INTO Amenities
               (description)
            VALUES
               (:amenityDescription)';
  $statement = $db->prepare($query);
  $statement->bindValue(':amenityDescription', $amenityDescription);
  $statement->execute();
  $statement->closeCursor();
}

function deleteAmenity($amenityID) {
  global $db;
  $query = 'DELETE FROM Amenities
            WHERE amenityID = :amenityID';
  $statement = $db->prepare($query);
  $statement->bindValue(':amenityID', $amenityID);
  $statement->execute();
  $statement->closeCursor();
}
?>
