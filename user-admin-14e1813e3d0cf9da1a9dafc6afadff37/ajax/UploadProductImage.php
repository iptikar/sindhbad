<?php
session_start();
// Required controller 
require '../../controller/controller.php';

require ('../../controller/UploadFileBySKU.php');

print_R(UploadFileBySKU::UploadProductImage(new MarketPlace, 'sku', 'formData'));

