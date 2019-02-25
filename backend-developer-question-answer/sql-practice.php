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
   
   /*
    * Write a query to to get the list of users who took the a training lesson more than once in the same day, grouped by user and training lesson, each ordered from the most recent lesson date to oldest date.
    * */
   /*
    * SELECT
      u.user_id,
      username,
      training_id,
      training_date,
      count( user_training_id ) AS count
  FROM users u JOIN training_details t ON t.user_id = u.user_id
  GROUP BY u.user_id,
           username,
           training_id,
           training_date
  HAVING count( user_training_id ) > 1
  ORDER BY training_date DESC;
    * */
    
    
 // What is an execution plan? When would you use it? How would you view the execution plan?
 
 /*
  * An execution plan is basically a road map that graphically or textually shows the data retrieval methods chosen by the
  *  SQL server’s query optimizer for a stored procedure or ad hoc query. 
  * Execution plans are very useful for helping a developer understand and analyze the performance 
  * characteristics of a query or stored procedure, 
  * since the plan is used to execute the query or stored procedure.

	In many SQL systems, a textual execution plan can be obtained using a keyword such as EXPLAIN, and visual representations 
	* can often be obtained as well. In Microsoft SQL Server, the Query Analyzer has an option called “Show Execution Plan” 
	* (located on the Query drop down menu). If this option is turned on, it will display query execution plans in a separate window when a query is run.
  * */
  
  mysql -u USER_NAME –xml -e 'SELECT * FROM table_name' > table_name.xml
  
  While you can execute backup commands from PHP, they don't really have anything to do with PHP. It's all about MySQL.

I'd suggest using the mysqldump utility to back up your database. The documentation can be found here : http://dev.mysql.com/doc/refman/5.1/en/mysqldump.html.

The basic usage of mysqldump is

mysqldump -u user_name -p name-of-database >file_to_write_to.sql
You can then restore the backup with a command like

mysql -u user_name -p <file_to_read_from.sql
Do you have access to cron? I'd suggest making a PHP script that runs mysqldump as a cron job. That would be something like

<?php

$filename='database_backup_'.date('G_a_m_d_y').'.sql';

$result=exec('mysqldump database_name --password=your_pass --user=root --single-transaction >/var/backups/'.$filename,$output);

if($output==''){/* no output is good */}
else {/* we have something to log the output here*/}
If mysqldump is not available, the article describes another method, using the SELECT INTO OUTFILE and LOAD DATA INFILE commands. The only connection to PHP is that you're using PHP to connect to the database and execute the SQL commands. You could also do this from the command line MySQL program, the MySQL monitor.

It's pretty simple, you're writing an SQL file with one command, and loading/executing it when it's time to restore.

You can find the docs for select into outfile here (just search the page for outfile). LOAD DATA INFILE is essentially the reverse of this. See here for the docs
   
/* Alter table if not exists */


/*
IF NOT EXISTS( SELECT NULL
            FROM INFORMATION_SCHEMA.COLUMNS
           WHERE table_name = 'tablename'
             AND table_schema = 'db_name'
             AND column_name = 'columnname')  THEN

  ALTER TABLE `TableName` ADD `ColumnName` int(1) NOT NULL default '0';

END IF;
*/