<?php
require('header.php');

// Require controlelr
require('../controller/controller.php');

// Get category id
//$_POST['id'] = '1';

//$_POST['sku'] = 'ADFDF59598';

//$_POST['secrate-key'] = 'c0d7dea929202d26a5b437d7b338fdabebb09e5b';

$get =  WebServiceApiController::GetProductByProductId('id', 'sku', 'secrate-key');

if (is_array($get) && count($get) > 0) {
    echo json_encode($get);
} else {
    echo "No records founds";
}
