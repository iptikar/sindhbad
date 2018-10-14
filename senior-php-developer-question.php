 <?php
 
 //$text = "this is\tsome text that\nwe might like to parse.";
// print_r(split("[\n\t]",$text));

interface AllMethods {
	
		public function login($username, $password);
		
		public function Registration($array_parms);
		
	}
	
// Implement the interface to the class 
class Hellowrld implements AllMethods {
		
		
		public function login($username, $password) {}
		
		public function Registration($array_pad){}
	
	
	}


trait MyMethods{
	
		public function Login($username, $password) {
			
				return $username.$password;
			}
		
		
		public function Registration($parameter){}
	
	}


// Usinge trait in multiple class 

class MyNewClass {
	
	
		// Use 
		use MyMethods;
		
		public function GetLogin($u, $p) {
			
				return $this->Login($u, $p);
			
			}
	
	}


class MyNewClass2 {
	
		use MyMethods;
		
		public function DickHead($u, $p) {
			
				return $this->Login($u, $p);
			}
	
	}

//$obj = new MyNewClass();

//echo $obj->GetLogin('bharatose', 'hihiha');


// Get new class 
//$obj1 = new MyNewClass2();

// echo something 
//echo $obj1->DickHead('thisis', 'Dick head');

// Here we will put abstract class 

abstract class MustAbstractClass {
	
		// Abstract method 
		abstract protected function Login($u, $p);
		abstract protected function Registration();
		
		
		public function GetLogin($u, $p) {
			
			return $u.$p;
			
			}
	}
	
	
class MyAbs extends MustAbstractClass {
	
		public function Login($u, $p) {}
			
		public function Registration(){}
	
	}
	
	
/* Interface is php reserve keywords which force any class to implement methods. Interface does not containe 
 * any body it's simply define all the method and while implementing interface to any child class by using implements 
 * Keywords interface applyies to any class and my not instantiete directly 
 * 
 * While traid remove the possibilities of multiple inheritence because it's as well key word and same methods 
 * We can use in severl class. Trait directly can not be instantiate rather then using use key word is any class 
 * trait call be extends and all methods which is defined in trait can be use 
 * */


?>


<?php 


/*
What is the effect of using with grant option wiehn executing the following 
statement

Why table locking is often not desirable compared to 
page or row locking 

Will the following select query list all of the tables in the INFORMAITON_SCHEMA
database 


Assume that the user account 'joe@'example exists. Whic of the following consequences
will occur if DROUP USER 'joe@example.com' command is executed 

Whic of the following are important network factors for remote MySQL clients 


What will be the results of the following query?

-> SELECT * FROM countryLanguage PROCEDURE ANALYSE(10, 256);
ANALYSE() examines the result from a query and returns an analysis of the results that suggests optimal data types for each column that may help reduce table sizes.

If i run the following script, what will be the result?

CREATE TABLE table2 AS SELECT * FROM table1;

-> Create table2 structure as same as table1

What does myisamchk do?

-> Reapir MyISAM table 

How to export tables as an XML file in MySQL?

-> mysqldump --xml test > test.xml

If you use PACK_KEYS=1 WHAT does that mean

-> Its pack all indexs of all kind of column 

Which of the following statement is not true about MySQL DROP Command 

-> 2 end 

When do we use a Having claues

-> With aggreated function because where clause do not support it

Whic of the following select staements will return all, records from the sales table where 
there is at least one record in the orders table with the same sales_id?

-> Last one 

*/
?>



<?php 


/*
$color = ['red', 'yellow', 'white'];
$x = in_array('black', $color);

if($x==0)
//echo "Good Bye";

if($x==1) //echo "Hello";
*/
$today = date("F j, Y, g:i:a");

/*
 * F = Month Name
 * j = date in the month 
 * Y = Year
 * g = hours 
 * i = Minute 
 * a = PM/AM
 * */
 
 

//echo $today;

$x = "101.5degrees";
(double)$x;
(int)$x;
//echo (string) $x;

//Supposte you have a server that has 
//been started with the --myisam-recover option
//When does he server perform the check on the MyISAM tables 

//How would you add 1 to the variable $count?
//define("GREETING", "Welcome to W3Schools.com!", true);

/*
define('x', '5');
//$x = $x+10;
//echo x;
*/

/*
$x = dir(".");

while($y=$x->read()) {
	
	echo $y."
	<br/>";
	}
$y->close();
* */
// Will give error 

$x = array(4,2,5,1,5,5,3,4);

$y = array_count_values($x);

//echo count($y); = 5

// base name will give test5.php
basename($_SERVER['PHP_SELF']);

$qpt = 'QualityPointTechologies';

//echo preg_match("/^Quality/", $qpt);

// Will output 1

$num = "123";

//if(!filter_var($num, FILTER_VALIDATE_INT))
	
//		echo ("Integer in not valie ");
	
//else 

//echo ("Inter is valid");

//whic of the following best 
//descript the effercts on the performance for hte 
//dynamic-row format of MyISAM

// Dynamic row that less space in disk then
// Fixed row and it is available in Innodb

//Whic of the following statements is 
//TRUE regarding table locks 


// Whic of the following statements is TRUE 
//regarding wildcards in the hostname of an 
//account specification?


//Which of the following BEST describes what 
//the master.info file contains  and how it is used 

//What are the reason to prefer using 
//GRANT AND REVOKE statements over editing the 
//privilege tables directly

// REVOKE ALL PRIVILEGES, GRANT OPTION FROM user 


//Whic of the following would be considered as 
//good condidate table for compression 
// Large table 

 //Whic of the following actions are performed 
//during an RPM installation of the MYSQL SERVER 
//package?

define("x", "5");
$x= x+10;
//echo x;

$x = [4,2,5,1,4,5,3,4];

$y = array_count_values($x);

//echo count($y);


$num = "123";

//if(!filter_var($num, FILTER_VALIDATE_INT))

//echo "Interger is not valid";

//else 
//echo "Integer is valid";

//sort an array in ascending order by value while preserving key associations


//Whic of the following statements is true regarding wildcards in the host name of na 
//account specification?

// E
//$x = array(1,3,2,3,7,8,9,7,3,8,8);

//$y = array_count_values($x);

//print_r ($y);

$rest = substr("abcdef", -1);
$rest1 = substr("abcdef", 0, -1);

//echo $rest.$rest1;


function zz(&$x) {
	
		$x = $x + 5;
	}
	
$x = 10;

zz($x);
//echo $x;


//Neglecting to set which of the following cookie will result in the cookie's domain being 
//set to the hostname of the server which generated it

//Which of the following are requirements for MyISAM binary portability 

//Which of the following statements is true regarding the structure of grant tables in new distributions


//Which of the following best descibes why innDB tables should always have 
//primary keys and why they should be short 

$date = "2009-5-19";

$time = "14:31:38";
$datetime = $date.$time;

//echo date("Y-m-d:H:i:s", strtotime($datetime));

$email = 'admin@psexam.com';

//$new = strstr($email, '@&rsquo;

/*
	Variable scope in which a variable does not loose its value when 
	the function exists and use that value if the function is called again is
*/

// Retular expression matches any string containing zero or one p

// Ans p?

// How can stored routines be used to check for constraints or legality of incoming data?

//which of the following actions are performed during and RPM installation of the MySQL server 
//package?

//which of the following statement is true structure of grant table in new distrubutions?

//Whic of the following Best Describes how MySQl UTILIZES THE GRANT TABLE BUFFERS 
// Ans: The grant table buffer loads grant table information into memory for fast access.

/*
 * NO.7 Which of the following best describes how MySQL utilizes the grant table buffers?
A. The grant table buffer loads grant table information into memory for fast access.
B. The grant table buffer loads what users are currently logged in and performing queries.
C. The grant table buffer holds requests waiting to check the grant table to perform access-control.
Answer: A
 * */
 
 /*
  * Why table loking is not desirable in mysql 
  * Which of the following BEST describes why table locking is often not desirable compared to page or row locking
  * Ans:  Table locks prevent other clients from making any changes to the table until released.
  * Table locks create concurrency issues.
  * */


/* Will the following SELECT query list all of the tables in the INFORMATION_SCHEMA database? if not why?
 * list all the tables in the information_schema database 
 * Ans: To get the all tables name execute the following query 
 * SELECT table_name FROM information_schema.tables;
 * 
 * By database 
 * SELECT table_name FROM information_schema.tables where table_schema='<your_database_name>';
 * 
 * */
 
 
 /* In which vriable is the users IP address stored?
  * Ans REMOTE_ADDR
  * 
  * */
  
  /*
   * If an error occurs when writing to the syslog, which logging option's description sends and 
   * ouput to the system console?
   * Ans a) LOG_CONS
   * */
   
   /*
  $username = 'jasonN';
  
  if(!preg_match("/^[a-z]$/", $username))
  
  echo "Not in lower case ";
	
  else 
  echo "Username is all lowercase";

*/

/*
$str = "Hello World";

echo wordwrap($str, 5, "<br>\n");
*/

/*
 * How can stored routines be used to check for constraints or legality of incoming data?
 * */
 
 
 /*The type of the file system you choose may affect mysql use and performance with regard to which of 
  * the following 
  * ans: Not found 
  * */


/* For which of the following purposes should the analyze table command be used 
 * Ans:
 * ANALYZE TABLE performs a key distribution analysis and stores the distribution for the named table or tables. For MyISAM tables, this statement is equivalent to using myisamchk --analyze.
 * 
 * ANALYZE TABLE examines key distribution and stores them in INFORMATION_SCHEMA.STATISTICS.

OPTIMIZE TABLE performs ANALYZE TABLE after doing some table compression. The equivalent of OPTIMIZE TABLE mydb.mytable; if the table was MyISAM is this:
 * */
 
 
 /*
  * 	Whic of the following BEST describes what may limit the number of simultaneous connections 
  * 	to the server. What are the possible ways to increase it?
  * Ans: did not found 
  * Ans: it's limited by the system 
  * */

/*
 * COALESCE()
 * */

/*
 * 	The CHECK TABLE command should be used??
 * 
 * Ans CHECK TABLE checks a table or tables for errors. For MyISAM tables, the key statistics are updated as well. CHECK TABLE can also check views for problems, such as tables that are referenced in the view definition that no longer exist.
 * */ 
 
 /* Which of the following is a valid reason for using --skip-networking?
  * Ans: How to restrict MySQL port access
  * 
  * */
  
  
  /* PHP Traits are simply a group of methods that you want include within another class
   * Different between primary key and unique key
   * Different between SOAP AND REST Api
   * Different between mysqli and pdo
   * Different between myisam and innodb
   * ---------------------------------------------------
   * ---------------------------------------------------
   * MYISAM STORE THE DATA ON THIS BASIS 
   * /var/lib/mysql/mydb/mytable.frm
	/var/lib/mysql/mydb/mytable.MYD (data)
	/var/lib/mysql/mydb/mytable.MYI (indexes)
	* 
	* 
	* WHILE INNODB STORE THE DATA ON THIS BASIS 
	* /var/lib/mysql/mydb/mytable.frm
	  /var/lib/mysql/mydb/mytable.ibd
   * 
   * 
   * "			"   	interface and trait
   * dIFFERENT bETWEEN FOREIGN KEY, UNIQUE KEY, PRIMARY KEY
   * "			"		
   * */
   


/* DIFFEREBT BETWEEB PDO AND MYSQLI */

/*  PDO									MYSQLI
 * ------------------------------------------------------------------------
 * --------------------------------------------------------------------------
									
	1. Supports 12 different database 	1. Only support for mysql database 
	* driver with same AP
	* 
	* $pdo = new PDO($dsn, "username", 		$mysqli = new mysqli("localhost", "username", "password", "databaseName");
	* "password", $options);	
	* $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
	* 
	* $stmt->rowCount();					$stmt->affected_rows;
	* $pdo->lastInsertId();					$mysqli->insert_id;	
	* 
	* $options = [							$mysqli->info;
		PDO::MYSQL_ATTR_FOUND_ROWS => true
	];		
	* $arr = $stmt->fetchAll(PDO::FETCH_ASSOC); $arr = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	* 
	* $arr = $stmt->fetch(PDO::FETCH_ASSOC);	$arr = $stmt->get_result()->fetch_assoc();
	* 
	* Scalar
	* $arr = $stmt->fetch(PDO::FETCH_COLUMN);	$arr = $stmt->get_result()->fetch_row()[0];
	* 
	* Fetch Array of Objects
	* 
	* $arr = $stmt->fetchAll(PDO::FETCH_CLASS, 'myClass');   $result = $stmt->get_result(); while($row = $result->fetch_object('myClass')) { $arr[] = $row; }
	* 
	* Like
	* 
	* 
 */
 
 
	
	
/*
 * 	Need to know about the laravel question answer 
 * */
 
 
 /* WHAT IS DIFFERENT BETWEEN LARAVEL 4 AND LARAVEL 5*/
 
 
		/* LARAVEL 4*/     						/* LARAVEL 5*/
 
 // New Folder Structure app/models Removed 
 // 2 illuminate/contracts This repository has no external dependencies
 // Route Cache
 // If your application is made up entirely of controller routes, you may utilize the new  route:cache Artisan command 
// Laravel 5 now supports HTTP middleware
// ser registration, authentication, and password reset controllers are now included out of the box, as well as simple corresponding views, which are located at resources/views/auth. 
//  Laravel 5  allows you to represent your queued jobs as simple command objects.  These commands live in the app/Commands directory.
// A database queue driver is now  included in Laravel
//The Laravel 5 base controller now includes a ValidatesRequests trait. 


/* HERE THE LINK TO READ MORE ARTICLES */
/*
// https://www.onlineinterviewquestions.com/laravel-interview-questions/#.W2VQ0XWFOsI
* /
* 
* //
* 
* /
* Abstract classes can have constants, members, method stubs 
* (methods without a body) and defined methods, 
* whereas interfaces can only have constants and methods stubs.
* 
* 
* =======================================================
* 
