Create database W3SchoolsDB;
Use W3SchoolsDB;

Set FOREIGN_KEY_CHECKS = 0; -- Temporarily disable foreign key checkup

-- Display available character set.
-- Charset lists available character sets.
-- Default Collation is the rules for comparing and sorting a character set.
Show Character Set;

-- Note the default character set and collation have to be set to "Latin1" 
-- since the data set contains western European characters.
Create table Customers (
	CustomerID int,
	CustomerName varchar(255) Not Null,
	ContactName varchar(255) Not Null,
	Address varchar(255),
	City varchar(255),
	PostalCode varchar(255),
	Country varchar(255),
	Constraint Cus_PK Primary Key (CustomerID)
) Default Character Set latin1 Collate latin1_swedish_ci;

Create table Categories (
	CategoryID int,
	CategoryName varchar(255) Not Null,
	Description varchar(1000),
	Constraint Cat_PK Primary Key (CategoryID)
) Default Character Set latin1 Collate latin1_swedish_ci;

Create table Employees (
	EmployeeID int,
	LastName varchar(255) Not Null,
	FirstName varchar(255) Not Null,
	BirthDate varchar(255),
	Photo varchar(255),
	Notes varchar(3000),
	Constraint Emp_PK Primary Key (EmployeeID)
) Default Character Set latin1 Collate latin1_swedish_ci;

Create table Shippers (
	ShipperID int,
	ShipperName	varchar(255) Not Null,
	Phone varchar(255),
	Constraint Shi_PK Primary Key (ShipperID)
) Default Character Set latin1 Collate latin1_swedish_ci;

Create table Suppliers (
	SupplierID int,
	SupplierName varchar(255) Not Null,	
	ContactName	varchar(255) Not Null, 
	Address	varchar(255),
	City varchar(255),
	PostalCode varchar(255),
	Country	varchar(255),
	Phone varchar(255),
	Constraint Sup_PK Primary Key (SupplierID)
) Default Character Set latin1 Collate latin1_swedish_ci;

Create table Products (
	ProductID int,
	ProductName	varchar(255) Not Null,
	SupplierID int Not Null,
	CategoryID int Not Null,
	Unit varchar(255),
	Price double,
	Constraint Pro_PK Primary key (ProductID),
	Constraint Pro_FK1 Foreign Key (SupplierID) References Suppliers(SupplierID),
	Constraint Pro_FK2 Foreign Key (CategoryID) References Categories(CategoryID)
) Default Character Set latin1 Collate latin1_swedish_ci;

Create table Orders (
	OrderID	int,
	CustomerID int Not Null,
	EmployeeID int Not Null,
	OrderDate varchar(255),
	ShipperID int Not Null,
	Constraint Ord_PK Primary Key (OrderID),
	Constraint Ord_FK1 Foreign Key (CustomerID) References Customers(CustomerID),
	Constraint Ord_FK2 Foreign Key (EmployeeID) References Employees(EmployeeID), 
	Constraint Ord_FK3 Foreign Key (ShipperID) References Shippers(ShipperID)
) Default Character Set latin1 Collate latin1_swedish_ci;

Create table OrderDetails (
	OrderDetailID int,
	OrderID int Not Null,
	ProductID int Not Null,
	Quantity int Not Null,
	Constraint OD_PK Primary Key (OrderDetailID),
	Constraint OD_FK1 Foreign Key (OrderID) References Orders(OrderID),
	Constraint OD_FK2 Foreign Key (ProductID) References Products(ProductID)
) Default Character Set latin1 Collate latin1_swedish_ci;

-- Load data from local CSV files. Note the CSV files have to be at the SAME
-- directory as this script file. 

-- Allow loading data from a local file
Set Global LOCAL_INFILE = ON;

Load Data Local Infile 'C:/Users/xsnot/Downloads/W3SchoolsDB/W3Schools/Customers.csv' Into Table Customers Character Set latin1 Fields Terminated By ','
Enclosed By '"'
Lines Terminated By '\r\n'
(CustomerID, CustomerName, ContactName, Address, City, PostalCode, Country);

Load Data Local Infile 'C:/Users/xsnot/Downloads/W3SchoolsDB/W3Schools/Categories.csv' Into Table Categories Character Set latin1 Fields Terminated By ','
Enclosed By '"'
Lines Terminated By '\r\n'
(CategoryID, CategoryName, Description);

Load Data Local Infile 'C:/Users/xsnot/Downloads/W3SchoolsDB/W3Schools/Employees.csv' Into Table Employees Character Set latin1 Fields Terminated By ','
Enclosed By '"'
Lines Terminated By '\r\n'
(EmployeeID,LastName, FirstName, BirthDate, Photo, Notes);

Load Data Local Infile 'C:/Users/xsnot/Downloads/W3SchoolsDB/W3Schools/OrderDetails.csv' Into Table OrderDetails Character Set latin1 Fields Terminated By ','
Enclosed By '"'
Lines Terminated By '\r\n'
(OrderDetailID, OrderID, ProductID, Quantity);

Load Data Local Infile 'C:/Users/xsnot/Downloads/W3SchoolsDB/W3Schools/Orders.csv' Into Table Orders Character Set latin1 Fields Terminated By ','
Enclosed By '"'
Lines Terminated By '\r\n'
(OrderID, CustomerID, EmployeeID, OrderDate, ShipperID);

Load Data Local Infile 'C:/Users/xsnot/Downloads/W3SchoolsDB/W3Schools/Products.csv' Into Table Products Character Set latin1 Fields Terminated By ','
Enclosed By '"'
Lines Terminated By '\r\n'
(ProductID, ProductName, SupplierID, CategoryID, Unit, Price);

Load Data Local Infile 'C:/Users/xsnot/Downloads/W3SchoolsDB/W3Schools/Shippers.csv' Into Table Shippers Character Set latin1 Fields Terminated By ','
Enclosed BY '"'
Lines Terminated By '\r\n'
(ShipperID, ShipperName, Phone);

Load Data Local Infile 'C:/Users/xsnot/Downloads/W3SchoolsDB/W3Schools/Suppliers.csv' Into Table Suppliers Character SET latin1 Fields Terminated By ','
Enclosed By '"'
Lines Terminated By '\r\n'
(SupplierID, SupplierName, ContactName,	Address, City, PostalCode, Country,	Phone);

Set FOREIGN_KEY_CHECKS = 1; -- Enable foreign key checkup
Set Global LOCAL_INFILE = OFF; -- Disallow loading data from a local file
