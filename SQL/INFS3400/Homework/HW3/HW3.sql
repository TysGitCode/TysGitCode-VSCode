--Question 1
USE w3schoolsdb;

SELECT DISTINCT EmployeeID, CustomerName, Country, o.CustomerID
FROM customers AS c
INNER JOIN orders as o
ON c.CustomerID = o.CustomerID
WHERE employeeID = 9
ORDER BY o.CustomerID ASC
;

--Question 2
USE w3schoolsdb;

SELECT DISTINCT customers.CustomerID, CustomerName, Country, EmployeeID
FROM customers, orders
WHERE EmployeeID = 9
;
 
--Question 3
USE w3schoolsdb;

SELECT c.CustomerID, COUNT(*) AS NumOrders
FROM customers AS c 
INNER JOIN orders AS o
ON c.CustomerID = o.CustomerID
GROUP BY c.CustomerID
ORDER BY c.CustomerID ASC
;

--Question 4
USE w3schoolsdb;

SELECT country, COUNT(*) AS NumOrders
FROM orders AS o
INNER JOIN customers AS c
ON o.CustomerID = c.CustomerID
GROUP BY c.Country
HAVING NumOrders > 9
ORDER BY NumOrders DESC
;

--Question 5
USE w3schoolsdb;

SELECT CategoryName, SUM(Price) AS SumValue
FROM categories AS c
INNER JOIN products AS p
ON c.CategoryID = p.CategoryID
GROUP BY CategoryName
HAVING CategoryName = "Meat/Poultry" OR CategoryName = "Seafood"
;
