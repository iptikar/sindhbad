<?php
require('header.php');

// Require controlelr
require('../controller/controller.php');



// Get category id
$category_id = 314;


$get =  WebServiceApiController::GetProductByCategoryList1('category_id');

if (is_array($get) && count($get) > 0) {
    echo json_encode($get);
} else {
    echo "No records founds";
}
