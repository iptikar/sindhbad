<?php
require 'header.php';
 
// File get content
$content = file_get_contents('http://localhost/js/categories.json');

// Print the json file
echo $content;
