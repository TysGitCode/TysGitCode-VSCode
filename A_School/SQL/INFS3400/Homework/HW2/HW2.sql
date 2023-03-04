USE	IS3400;


--For problem 1
SELECT SFName, SLName, SPhone
FROM student
;

--For problem 2
SELECT *
FROM student
WHERE SFName = "James"
;

--For problem 3
SELECT PFName, PLName, PRank
FROM professor
WHERE PFName = "Jill"
;

--For problem 4
SELECT PFName, PLName, PRank
FROM professor
WHERE PFName LIKE	"Ji%"
;

--For Problem 5
SELECT CCallNum, CTitle
FROM	course
;

--For Problem 6
SELECT DISTINCT CTitle
FROM	course
;

--For Problem 7
SELECT DISTINCT CTitle, YYear, Semester
FROM	course AS c
INNER JOIN enrollment AS e
ON c.CCallNum = e.CCallNum
;

--For Problem 8
SELECT DISTINCT CTitle, PFname, PLname 
FROM course AS c
INNER JOIN enrollment AS e
ON c.CCallNum = e.CCallNum 
INNER JOIN professor AS p
ON e.PID = p.PID
;