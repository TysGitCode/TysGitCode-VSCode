-- By James Ma
-- Create and Insert

-- Create the database
Create Database IS3400 ;
Use IS3400 ;

-- Create 3 basic tables
Create Table Student (
	SID Varchar(255),
	SFName Varchar(255) Not Null,
	SLName Varchar(255) Not Null,
	SEmail Varchar(255 ),
	SPhone Varchar (255),
	Constraint S_PK Primary Key (SID)
) ;

Create Table Professor (
	PID Varchar(255),
	PFName Varchar(255) Not Null,
	PLName Varchar(255) Not Null,
	PRank Varchar(255) Not Null,
	PEmail Varchar(255),
	Constraint P_PK Primary Key (PID)
) ;

Create Table Course (
	CCallNum Varchar(255),
	CDept Varchar (255) Not Null,
	CNumber Varchar (255) Not Null,
	CTitle Varchar (255) Not Null,
	Constraint C_PK Primary Key (CCallNum)	
) ;

-- Create a table to link the above 3 basic tables
Create Table Enrollment (
	EID Varchar(255),
	YYear Year Not Null,
	Semester Varchar(255) Not Null,
	SID Varchar(255) Not Null,
	PID Varchar(255) Not Null,
	CCallNum Varchar(255) Not Null,
	Constraint E_PK Primary Key (EID),	
	Constraint E_FK1 Foreign Key (SID) References Student(SID ),
	Constraint E_FK2 Foreign Key (PID) References Professor(PID),
	Constraint E_FK3 Foreign Key (CCallNum) References Course(CCallNum)
) ;	

-- Insert records in 4 tables by batch
Insert Into Student
(SID, SFName, SLName, SEmail, SPhone)
Values
( "1111", "James", "Marks", "jmas@uccs.edu", "555-1111" ),
( "1222", "Jason","Marks", "jmk@uccs.edu", "555-1111" ),
( "1333", "Joe", "Smith", "joe@uccs.edu", "555-5555" ),
( "1444", "John", "Smith", "john@uccs.edu", "555-6666" ),
( "1555", "James", "Remington", "jrem@uccs.edu", NULL )
;

Insert Into Professor
(PID, PFName, PLName, PRank, PEmail)
Values
( "2111", "James", "Ma", "Assistant Professor", "jma@uccs.edu" ),
( "2222", "Jack", "Remington", "Dean", "jack@uccs.edu" ),
( "2333", "Jim", "Johnsons", "Assistant Professor", "jim@uccs.edu" ),
( "2444", "Jill", "Johnsons", "Associate Professor", "jill@uccs.edu" ),
( "2555", "Jane", "Remington", "President", "jane@uccs.edu" )
;

Insert Into Course
(CCallNum, CDept, CNumber, CTitle)
Values
( "3111", "INFS", "3000", "MIS" ),
( "3222", "INFS", "3000", "MIS" ),
( "3333", "INFS", "3080", "Programming" ),
( "3444", "ACCT", "1100", "Accounting Intro" ),
( "3555", "MGMT", "2050", "Micro Econ" )
;

Insert Into Enrollment
(EID, YYear, Semester, SID, PID, CCallNum)
Values
( "4001", "2013", "Spring", "1111", "2111", "3111" ),
( "4002", "2013", "Spring", "1111", "2222", "3444" ),
( "4011", "2014", "Fall", "1111", "2111", "3111" ),
( "4014", "2014", "Fall", "1222", "2111", "3111" ),
( "4035", "2014", "Fall", "1444", "2111", "3111" )
;