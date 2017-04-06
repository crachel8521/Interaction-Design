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
user_sname  varchar(50),  
email       varchar(35) not null,   
address     varchar(155),   
age     	int not null,   
user_type   varchar(35) 
);


INSERT INTO Accounts VALUES
(1, 'SCindy','hhp','Smith','Cindy', 'Cindy07','cindy@uncc.edu', '1234, address comes here',21,'parent'), 
(2, 'JElmer','hhp','Jones','Elmer', 'Elmar17','jones@uncc.edu', '1234, address comes here',7,'kid'), 
(3, 'SRalph','hhp','Simonian','Ralph', 'Ralph16','ralph@uncc.edu', '1234, address comes here',14,'mentor')
;

Drop Table Events;
CREATE TABLE Events
(
  event_id     int not null,
  event_name   varchar(155) not null,
  event_desc   varchar(255),
  event_type  varchar(35) not null,
  event_location varchar(155),
  event_link   varchar(245) not null
);

INSERT INTO Events VALUES 
(1,'event 1', 'event description comes here','Family','Charlotte', 'Event link comes here'),
(2,'event 2', 'event description comes here','Kids','Rock hill', 'Event link comes here'),
(3,'event 3', 'event description comes here','Designer','Durham', 'Event link comes here')
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

DROP TABLE Builder_Status;
CREATE TABLE Builder_Status
(
  builder_user_id    int not null,
  recipient_user_id    int not null,
  builder_name varchar(100) not null,
  status_update  blob(65535),
  status_desc varchar(500),
  date_posted datetime not null
);

INSERT INTO Builder_Status VALUES 
(4, 2,'Steven Smith', '','status update comes here', now())
;
