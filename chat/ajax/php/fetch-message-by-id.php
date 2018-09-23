<?php 
session_start();

// Required 
require('fetch-message-by-fp.php');


// Json decode 
//$data = json_decode(fetchUsers($_POST['id']));

// echo $data 
$data = fetchMessageById($_POST['id']);

echo  $data['html'];