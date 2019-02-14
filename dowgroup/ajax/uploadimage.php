<?php
require '../controller/controller.php';
$obj = new DowGroup();
if($obj->uploadFiles('file') == true){echo "File Uploaded Sucessfully.";}
