-- create the database
DROP DATABASE IF EXISTS hhp;
CREATE DATABASE hhp;

-- select the database
USE hhp;

DROP TABLE IF EXISTS Accounts;
CREATE TABLE Accounts 
(
user_id     int auto_increment,
user_name   varchar(155)not null,   
password    varchar(35) not null,   
last_name  varchar(35) not null,   
first_name   varchar(35) not null,
user_sname  varchar(50),  
email       varchar(35) not null,   
address     varchar(155),   
age     	int not null,   
user_type   varchar(35), 
CONSTRAINT PK_Person PRIMARY KEY (user_id,user_name)
);


INSERT INTO Accounts VALUES
(1, 'SCindy','hhp','Smith','Cindy', 'Cindy07','cindy@uncc.edu', '1234, address comes here',21,'user'), 
(2, 'JElmer','hhp','Jones','Elmer', 'Elmar17','jones@uncc.edu', '1234, address comes here',7,'user'), 
(3, 'SRalph','hhp','Simonian','Ralph', ' ','ralph@uncc.edu', '1234, address comes here',14,'user'),
(4, 'RAmanda','hhp','Riley','Amanda', 'Amanda15','amanda@hhp.com', '1234, address comes here',23,'admin')
;

DROP TABLE IF EXISTS Events;
CREATE TABLE Events
(
  event_id     int auto_increment,
  event_name   varchar(155) not null,
  event_desc   varchar(255),
  event_type  varchar(35) not null,
  event_location varchar(155),
  event_photo  blob,
  event_link   varchar(245) not null,
  CONSTRAINT PK_Event PRIMARY KEY (event_id)
);

INSERT INTO Events VALUES
(1,'Demo, User Studies', 'Students will submit their user study progress report and demonstrate their project development','Class','Charlotte', '', 'https://uncc.instructure.com/courses/46603/assignments/167853'),
(2,'Grad Scholarly Article', 'Graduate students will submit their research based on their projects','Graduate Students','Charlotte', '', 'https://uncc.instructure.com/courses/46603/assignments/167853'),
(3,'Final Demo', 'Students will demonstrate their final functional project','Class','Charlotte', '', 'https://uncc.instructure.com/courses/46603/assignments/167853')
;
select * from Events;

DROP TABLE IF EXISTS Stories;
CREATE TABLE Stories
(
  story_id     int auto_increment,
  story_title   varchar(155) not null,
  user_id  int not null,
  story_text varchar(1000),
  story_photo  blob,
  date_posted Datetime,
  likes int not null,
  CONSTRAINT PK_Story PRIMARY KEY (story_id),
  CONSTRAINT FK_Story FOREIGN KEY (user_id) REFERENCES Accounts(user_id)
);

INSERT INTO Stories VALUES 
(1,'Hamed’s Genium story', 3, 'Living in a big city, Hamed spends a lot of time walking and being outdoors. He depends on the Genium prosthetic leg to help him stay active with exercise and keep up with his friends and his career. As a prosthetist, Hamed knows the importance of a high functioning prosthesis like the Genium prosthetic leg.', '',now(),2),
(2,'Josh’s DynamicArm story', 2, 'Josh’s drive and passion are reflected in every area of his life. Whether he is knotting his tie in preparation for handling a legal case or loosening up for a 3-point shot from the arc, he uses his DynamicArm to the fullest.', '',now(),5),
(3,'Andrew and the X3 waterproof prosthetic leg', 1, 'Lt. Col. (Ret.) Andrew Lourake was the first Air Force pilot with an above-knee amputation to return to active duty. He did it on a C-Leg, and has since moved on to the X3, Ottobock’s remarkable waterproof microprocessor knee. In addition to jetting around lakes, he takes to the sky and works at the Veterans Air Command (VAC), an amazing organization that provides free air transportation to post 9/11 combat wounded and their families for medical and other compassionate purposes through a network of volunteer aircraft owners and pilots.', '',now(), 4)
;
select * from stories;

DROP TABLE IF EXISTS Mentor;
CREATE TABLE Mentor
(
  user_id int not null,
  mentor_id int not null,
  mentee_id int not null,
  mentorship_type varchar(35) not null,
  CONSTRAINT FK_Mentor FOREIGN KEY (user_id) REFERENCES Accounts(user_id)
  );

INSERT INTO Mentor VALUES 
(1, 1, 2, 'mentor'),
(2, 1, 2, 'mentee')
;

DROP TABLE IF EXISTS Builder_Status;
CREATE TABLE Builder_Status
(
  builder_user_id    int not null,
  recipient_user_id    int not null,
  builder_name varchar(100) not null,
  status_update  blob,
  status_desc varchar(500),
  date_posted datetime not null,
  CONSTRAINT FK_Builder FOREIGN KEY (builder_user_id) REFERENCES Accounts(user_id),
  CONSTRAINT FK_Recipient FOREIGN KEY (recipient_user_id) REFERENCES Accounts(user_id)
);

INSERT INTO Builder_Status VALUES 
(4, 2,'Steven Smith','','Hand is in the designing process', now())
;
select * from builder_status;