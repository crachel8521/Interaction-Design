-- create the database
DROP DATABASE IF EXISTS hhp;
CREATE DATABASE hhp;

-- select the database
USE hhp;

DROP TABLE Accounts;
CREATE TABLE Accounts 
(
user_id     int not null,
user_name   varchar(155)not null,   
password    varchar(35) not null,   
first_name  varchar(35) not null,   
last_name   varchar(35) not null,   
email       varchar(35) not null,   
address     varchar(155),   
age     	int not null,   
user_type   varchar(35) 
);


INSERT INTO Accounts VALUES
(1, 'SCindy','hhp','Smith','Cindy', 'cindy@uncc.edu', '1234, address comes here',21,'parent'), 
(2, 'JElmer','hhp','Jones','Elmer', 'jones@uncc.edu', '1234, address comes here',7,'kid'), 
(3, 'SRalph','hhp','Simonian','Ralph', 'ralph@uncc.edu', '1234, address comes here',14,'mentor')
;

CREATE TABLE Events
(
  event_id     int not null,
  event_name   varchar(155) not null,
  event_desc   varchar(255),
  event_type  varchar(35) not null,
  event_location varchar(155)
);

INSERT INTO Events VALUES 
(1,'event 1', 'event description comes here','Family','Charlotte'),
(2,'event 2', 'event description comes here','Kids','Rock hill'),
(3,'event 3', 'event description comes here','Designer','Durham')
;

CREATE TABLE Stories
(
  story_id     int not null,
  story_title   varchar(155) not null,
  user_id  int not null,
  story_text varchar(500),
  date_posted Datetime
);

INSERT INTO Stories VALUES 
(1,'Story 1', 3, 'Story text comes here', now()),
(2,'Story 2', 2, 'Story text comes here', now()),
(3,'Story 3', 1, 'Story text comes here', now())
;

CREATE TABLE Mentor
(
  user_id     int not null,
  mentee_name varchar(100) not null,
  mentor_sname  varchar(50) not null,
  mentee_sname  varchar(50) not null
);

INSERT INTO Mentor VALUES 
(3,'Ralph Simonian', 'ralph123', 'jones22')
;

CREATE TABLE Builder
(
  user_id     int not null,
  builder_name varchar(100) not null,
  device_recipient_id int not null,
  builder_sname  varchar(50) not null
);

INSERT INTO Builder VALUES 
(4,'Steven Smith', 1095, 'Steve49')
;
