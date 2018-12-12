<?php
$mysqli = new mysqli('localhost', 'root', 'a', 'test');

if(!$mysqli) 

die($mysqli->error);

$sql = $mysqli->query("SELECT * FROM tracker");

if(!$sql) 

die($mysqli->error);
while($row = $sql->fetch_assoc()) {
	
	print_R($row);
	
	}

 do{
    if ($res = $mysqli->store_result()) {
        
        echo "<pre>";
        print_R($res->fetch_all());
        $res->free();
    } else {
        if ($mysqli->errno) {
            echo "Store failed: (" . $mysqli->errno . ") " . $mysqli->error;
        }
    }
} while ($mysqli->more_results() && $mysqli->next_result());


echo "<h1>".memory_get_usage()."</h1>";
