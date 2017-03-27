-- create the database
DROP DATABASE IF EXISTS hhp;
CREATE DATABASE hhp;

-- select the database
USE hhp;

CREATE TABLE Accounts
(
  user_id     int not null,
  password    varchar(35) not null,
  last_name   varchar(35) not null,
  first_name  varchar(35) not null,
  age  		  int not null,
  user_type   varchar(35) not null
);

INSERT INTO Accounts VALUES 
(1,'hhp','Smith','Cindy',21,'parent'),
(2,'hhp','Jones','Elmer',7,'kid'),
(3,'hhp','Simonian','Ralph',14,'mentor')
;

CREATE TABLE Events
(
  event_id     int not null,
  event_name   varchar(155) not null,
  event_type  varchar(35) not null,
  event_location varchar(155)
);

INSERT INTO Events VALUES 
(1,'event 1','Family','Charlotte'),
(2,'event 2','Kids','Rock hill'),
(3,'event 3','Designer','Durham')
;

CREATE TABLE Stories
(
  story_id     int not null,
  story_title   varchar(155) not null,
  user_id  int not null
);

INSERT INTO Stories VALUES 
(1,'Story 1', 3),
(2,'Story 2', 2),
(3,'Story 3', 1)
;