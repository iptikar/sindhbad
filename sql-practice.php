<?PHP

/*
SELECT SupplierName, Country, count(Country) as CountryCount
FROM Suppliers
WHERE EXISTS (SELECT ProductName FROM Products WHERE SupplierId = 
* Suppliers.SupplierId AND Price > 40) GROUP BY Country
*/



/*
SELECT Employees.LastName, count(Orders.OrderID) as NumberOfOrders
From ( Orders
INNER JOIN Employees ON Orders.EmployeeID = Employees.EmployeeID)
GROUP BY LastName
HAVING count(Orders.OrderID) > 10 ORDER BY OrderDate desc
* */

/*
 * SELECT Employees.LastName, count(Orders.OrderID) as NumberOfOrders,
Orders.OrderDate
From ( Orders
INNER JOIN Employees ON Orders.EmployeeID = Employees.EmployeeID)
GROUP BY LastName
HAVING count(Orders.OrderID) > 10 ORDER BY OrderDate desc
 * */
 
 /*SELECT Employees.LastName, count(Orders.OrderID) as NumberOfORders,
Orders.OrderDate FROM (Orders
INNER JOIN Employees ON Orders.EmployeeID = Employees.EmployeeID)
GROUP BY LastName HAVING count(Orders.OrderID) > 10  and OrderDate between '1996-07-04' and '1997-01-21' ORDER BY OrderDate desc
  * 
  * */
 
 // You can use multiple order by clasuse 
 
 /*
  * SELECT * FROM Customers
ORDER BY country asc, CustomerName desc, CustomerID asc;
  * */
  
  
  /* Is not null */
  /*SELECT  CustomerName  FROM Customers
	WHERE CustomerName IS NOT NULL;
   * 
   * */
   
   
 /*SELECT MAX(Price)  AS LargestPrice, AVG(Price) as AveragePrice, MIN(Price) as MinimunPrice
FROM Products;
  * 
  * */
  
  /*
   * SELECT City FROM Customers
WHERE  EXISTS(
SELECT City from Suppliers WHERE Customers.City = Suppliers.City );
   * */
   
   
   /* SELECT * INTO CustomersBackup2017
FROM Customers;*/

/*
 * SELECT ProductName, Price, OrderDetails.OrderID, OrderDetails.Quantity,Suppliers.SupplierName, 
 * Price*OrderDetails.Quantity as totalAmountOrder
FROM((
Products
INNER JOIN 
OrderDetails ON Products.ProductID = OrderDetails.ProductID)
INNER JOIN
Suppliers on Products.SupplierID = Suppliers.SupplierID);

        
 * */
 
 /*
  * SELECT ProductName, Price, OrderDetails.OrderID, OrderDetails.Quantity,
  * Suppliers.SupplierName, Price*OrderDetails.Quantity as totalAmountOrder, Categories.CategoryName
FROM(((
Products
INNER JOIN 
OrderDetails ON Products.ProductID = OrderDetails.ProductID)
INNER JOIN
Suppliers on Products.SupplierID = Suppliers.SupplierID)
INNER JOIN
Categories ON Products.CategoryID = Categories.CategoryID)
GROUP BY ProductName;
   
  * 
  * */
   
   
   
  /*
   * SELECT A.CustomerName as CustomerName1, B.CustomerName AS CustomerName2, A.City,
   *  A.CustomerID as AID, 
   * B.CustomerID as BID
FROM Customers A, Customers B
Where A.CustomerID <> B.CustomerID
AND A.City = B.City
ORDER BY A.City
   * */
   
   /*
    * SELECT ProductID, IF('Price' < 18, Price + 10, Price - 10) as UpdatedPrice from Products 
    * 
    * */
    
    
  /*
   * SELECT name, COUNT(email) 
 FROM users
 GROUP BY email
 HAVING COUNT(email) > 1 
   * */ 
   
   
   /*SELECT name, email, COUNT(*)
 FROM users
 GROUP BY name, email
 HAVING COUNT(*) > 1
    * 
    * */

/*
 * SELECT name FROM customer WHERE state IN ('VA');
 * */

/* Copy data from one table to another */

/*
 * INSERT INTO table2 (column1, column2, column3, ...)
SELECT column1, column2, column3, ...
FROM table1
WHERE condition;
 * */


/*
 * ManagerId	Manager		Average_salary_under_manager
 * 16			Rajesh			65000
17	Raman						62500
18	Santosh						53750
 * */

/*
 * select b.emp_id as "Manager_Id",
          b.emp_name as "Manager", 
          avg(a.salary) as "Average_Salary_Under_Manager"
from Employee a, 
     Employee b
where a.manager_id = b.emp_id
group by b.emp_id, b.emp_name
order by b.emp_id;
 * */

/*
 * select weight, trunc(weight) as kg, nvl(substr(weight - trunc(weight), 2), 0) as gms
from mass_table;
 * */

// Write a single query to calculate the sum of all positive values of x and he sum of all negative values of

/*
 * select sum(case when x>0 then x else 0 end)sum_pos,sum(case when x<0 then x else 0 end)sum_neg from a;
 * */

//How do you get the Nth-highest salary from the Employee table without a subquery or CTE?
/*
 * SELECT salary from Employee order by salary DESC LIMIT 2,1
 * */


//How do you get the last id without the max function?
/*
 * select id from table order by id desc limit 1
 * */

// Write a query to insert/update Col2’s values to look exactly opposite to Col1’s values.

// Select from one database and insert to another 

/* INSERT INTO database2.table1 (*fields*) 
SELECT *fields* FROM database1.table1
*/




/*
 * update table set col2 = case when col1 = 1 then 0 else 1 end
 * */
 
 
 /*
  * 
*  select b.emp_id as "Manager_Id",
	b.emp_name as "Manager", 
	avg(a.salary) as "Average_Salary_Under_Manager"
	from Employee a, 
	Employee b
	where a.manager_id = b.emp_id
	group by b.emp_id, b.emp_name
	order by b.emp_id;
  * 
  * */
  
  /*
   * Imagine a single column in a table that is populated with either a single digit (0-9) or a single character (a-z, A-Z). 
   * Write a SQL query to print ‘Fizz’ for a numeric value or ‘Buzz’ for alphabetical value for all values in that column.
   * */
   // SELECT col, case when upper(col) = lower(col) then 'Fizz' else 'Buzz' end as FizzBuzz from table;
   
   // SELECT col, case when upper(col) = lower(col) then 'fizz' else 'buzz' end as FizzBuzz from table;
   
   
