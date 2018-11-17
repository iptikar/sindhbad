<?php

$array = [ 1,2,3 ];
$assoc = [ "one" => 1, "two" => 2, "three" , 3, 'four' => 1 ];

//var_dump(...$array); //Works
//var_dump(...$assoc); //Doesn't work
print_R(array_values($assoc));
