<?php echo "<h1>".memory_get_usage()."</h1>";


$mysqli = new mysqli('localhost', 'root', 'a', 'test');

if(!$mysqli) 

die($mysqli->error);

/*

if (!$mysqli->query("DROP PROCEDURE IF EXISTS p") ||
    !$mysqli->query('CREATE PROCEDURE p() READS SQL DATA BEGIN SELECT * FROM product_catalogs; SELECT id + 1 FROM product_catalogs; END;')) {
    echo "Stored procedure creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}




if (!$mysqli->multi_query("CALL p()")) {
    echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

// get the all result 
$all_result = [];

do {
    if ($res = $mysqli->store_result()) {
        
        $all_result[] = $res->fetch_all(MYSQLI_ASSOCs);
        
        
        $res->free();
    } else {
        if ($mysqli->errno) {
            echo "Store failed: (" . $mysqli->errno . ") " . $mysqli->error;
        }
    }
} while ($mysqli->more_results() && $mysqli->next_result());

echo "<pre>";

print_R($all_result);
echo "</pre>";

echo "<h1>".memory_get_usage()."</h1>";
* 
* 
* / INSERTING DATA USING STORE PROCEDURE 
* */



$rand = rand(0,1000);

$email = "dickhead@gmail.com";
$seen = date('Y-m-d H:i:s');

if(!$mysqli->query("DROP PROCEDURE IF EXISTS simpleproc") || 

!$mysqli->query("CREATE PROCEDURE simpleproc (IN buyeremail varchar(191), IN seen datetime)
BEGIN
    insert into tracker (buyeremail, seen) values ('hello', '2014'),('hello', '2014');
END")) {
		die($mysqli->error);
	}

// Call the store procedure 
if (!$mysqli->query("CALL simpleproc('bharatrose1@gmail.com', '$seen')")) {
    echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
}



echo "Hello";

//----------------------------------------------/
// UPDATING COLUMN USING STORE PROCEDURE 
//----------------------------------------------/

/*
$rand = rand(0,1000);
$id = '2';
$email = "gotohello@gmail.com";
$seen = date('Y-m-d H:i:s');

if(!$mysqli->query("DROP PROCEDURE IF EXISTS simpleproc") || 

!$mysqli->query("CREATE PROCEDURE simpleproc (IN buyeremail varchar(191), 

IN seen datetime
)
BEGIN
    UPDATE tracker SET buyeremail = '$email', seen = '$seen' WHERE id = '$id';
END")) {
		die($mysqli->error);
	}

// Call the store procedure 
if (!$mysqli->query("CALL simpleproc('$email' '$seen','$id')")) {
    echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
}
* */

// ----------------------------------------------------------/
// DELETE STORE PRCEDURE 
// ---------------------------------------------------------/

/*
$rand = rand(0,1000);
$id = '15';
$email = "gotohello@gmail.com";
$seen = date('Y-m-d H:i:s');

if(!$mysqli->query("DROP PROCEDURE IF EXISTS deleteRecord") || 

!$mysqli->query("CREATE PROCEDURE deleteRecord (IN Uid int(11)
)
BEGIN
    DELETE FROM tracker WHERE id = Uid;
END")) {
		die($mysqli->error);
	}

// Call the store procedure 
if (!$mysqli->query("CALL deleteRecord($id)")) {
    echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
}


*/

/*
 * Note: Your forgot 
 * deleteRecord (IN Uid int(11)) this is custom part and all column need to define custom way 
 * not column name 
 * IN Uid int(11)
 * */
