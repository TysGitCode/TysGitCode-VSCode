
--1 Locate input and output columns 1.
--2 Locate input and output tables
--3 find a table path linking all tables
--4 Check if all input columns in one table & all output columns in one table

--This Finds all the customers in a datbase that are from germany and matches their employee ID's and Customer ID's from the employees and customers tables
SELECT *
FROM employees AS	e
INNER	JOIN orders	AS	o
ON e.EmployeeID = o.EmployeeID
INNER	JOIN customers AS	c
ON	o.CustomerID = c.CustomerID
WHERE	c.Country = "Germany"
;

--You can NOT joing customers and employees because there is nothing in common between them
--Use Select Distinct to show certain names that match criteria


--This finds and matches all customer ID's from the customers and orders table
SELECT *
FROM customers AS	c	
INNER	JOIN orders	AS	o
ON	c.CustomerID = o.CustomerID
;

--subquery

--This finds the first and last name of customers from germany by subquery instead of inner join

SELECT e.FirstName, e.LastName	
FROM	employees AS e
WHERE	e.EmployeeID IN
(
	SELECT DISTINCT o.EmployeeID
	FROM orders AS	o
	WHERE	o.CustomerID IN
	
	(
		SELECT c.CustomerID
		FROM customers AS c
		WHERE c.Country = "Germany"
	)
)
;