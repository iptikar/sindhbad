<?php
session_start();
session_regenerate_id();
//  required 
require '../../controller/controller.php';
// This page is using class in controller DeleteProductBySKU.php
echo DeleteProductBySKU::DeleteNow('sku', 'id');
