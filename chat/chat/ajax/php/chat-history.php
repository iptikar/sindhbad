<?php
session_start();
require 'fetch-message-by-fp.php';

require '../../admin/functions.php';
/* Here we need to check if chat session time */
/* Required the file */



$json_convert = json_decode(fetchUsers(), false);

// Get message 
$message = $json_convert->html;

echo $message;			
?>