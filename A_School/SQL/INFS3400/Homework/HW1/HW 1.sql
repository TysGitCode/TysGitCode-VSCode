-- By Ty Mitchell
-- Homework 1, 1/25/2022
-- Create, Update, and Delete

-- Creates The Database And Names It
CREATE DATABASE IS3400 ;

-- Makes Sure To Only Use This Database
USE IS3400 ;

-- Creates The Student Table
CREATE TABLE Student (

	-- Student ID
	SID VARCHAR(4) ,
	
	
	-- Student First Name
	SFName VARCHAR(255) NOT NULL , 
	
	-- Student Last Name
	SLName VARCHAR(255) NOT NULL , 
	
	-- Student Email
	SEmail VARCHAR(255) NOT NULL , 
	
	-- Student Phone Number
	SPhone CHAR(8) ,
	
	-- Sets Student ID As The Primary Key
	CONSTRAINT SID_pk PRIMARY KEY (SID)
	
) ;


-- Adds The Pre-Determined Student Fields To The Student Table
INSERT INTO Student
(SID, SFName, SLName, SEmail, SPhone)
VALUES
("1111", "James", "Marks", "jmas@uccs.edu", "555-1111"),
("1222", "Jason", "Marks", "jmk@uccs.edu", "555-1111"),
("1333", "Joe", "Smith", "joe@uccs.edu", "555-5555"),
("1444", "John", "Smith", "john@uccs.edu", "555-6666"),
("1555", "James", "Remington", "jrem@uccs.edu", " ")
;


-- Creates The Professor Table
CREATE TABLE Professor (

	-- Professor ID
	PID VARCHAR(255) , 
	
	-- Professoor First Name
	PFName VARCHAR(255) NOT NULL , 
	
	-- Professor Last Name
	PLName VARCHAR(255) NOT NULL , 
	
	-- Processor Rank
	PRank VARCHAR(255) NOT NULL , 
	
	-- Professor Email
	PEmail VARCHAR(255) NOT NULL ,

	-- Sets Professor ID As The Primary Key
	CONSTRAINT PID_pk PRIMARY KEY (PID)
	
) ;


-- Adds The Pre-Determined Professor Fields To The Professor Table
INSERT INTO professor
(PID, PFName, PLName, PRank, PEmail)
VALUES
("2111", "James", "Ma", "Assistant Professor", "jma@uccs.edu"),
("2222", "Jack", "Remington", "Dean", "jack@uccs.edu"),
("2333", "Jim", "Johnsons", "Assistant Professor", "jim@ucc.edu"),
("2444", "Jill", "Johnsons", "Associate Professor", "jill@uccs.edu"),
("2555", "Jane", "Remington", "President", "jane@uccs.edu")
;

-- Creates The Course Table
CREATE TABLE Course (

	-- Course Call Number
	CCallNum VARCHAR(4) ,
	
	-- Course Department
	CDept CHAR(4) NOT NULL , 
	
	-- Course Number
	CNumber CHAR(4) NOT NULL , 
	
	-- Course Title
	CTitle VARCHAR(255) NOT NULL ,
	
	-- Sets Course Call Number As The Primary Key
	CONSTRAINT CCallNum_pk PRIMARY KEY (CCallNum)

) ;


-- Adds The Pre-Determined Course Fields To The Course Table
INSERT INTO Course
(CCallNum, CDept, CNumber, CTitle)
VALUES
("3111", "INFS", "3000", "MIS"), 
("3222", "INFS", "3000", "MIS"),
("3333", "INFS", "3080", "Programming"),
("3444", "ACCT", "1100", "Accounting Intro"),
("3555", "MKTG", "2050", "Micro Econ")
;


-- Creates The Enrollment Table
CREATE TABLE Enrollment (

	-- Enrollment ID
	EID VARCHAR(255) , 
	
	-- Enrollment Year
	YYear CHAR(4) NOT NULL ,
	
	-- Semester
	Semester VARCHAR(255) NOT NULL , 
	
	-- Student ID
	SID CHAR(4) NOT NULL ,
	
	-- Professor ID
	PID CHAR(4) NOT NULL , 
	
	-- Course Call Number
	CCallNum CHAR (4) NOT NULL ,
	
	-- Sets Enrollment ID As The Primary Key
	CONSTRAINT EID_pk PRIMARY KEY (EID)
	
) ; 


-- Adds The Pre-Determined enrollment Fields To The Enrollment Table
INSERT INTO Enrollment
(EID, YYear, Semester, SID, PID, CCallNum)
VALUES
("4001", "2013", "Spring", "1111", "2111", "3111"),
("4002", "2013", "Spring", "1111", "2222", "3444"),
("4011", "2014", "Fall", "1111", "2111", "3111"),
("4014", "2014", "Fall", "1222", "2111", "3111"),
("4035", "2014", "Fall", "1444", "2111", "3111")
;


-- Updates Joe to Joseph and Joseph@uccs.edu
UPDATE Student
SET SFName = "Joseph", SEmail = "joseph@uccs.edu"
WHERE SFName = "Joe" AND SLName = "Smith"
;


-- Deletes Jane Remington Because She Is NOT Longer A Professor
DELETE FROM Professor WHERE PFName = "Jane" AND PLName = "Remington" 
;