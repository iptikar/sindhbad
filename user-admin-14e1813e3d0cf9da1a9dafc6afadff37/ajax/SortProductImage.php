<?php
session_start();
// Go two step back include RemoveImageFromProduct.php
require '../../controller/controller.php';
require '../../controller/SortProductImages.php';
echo SortProductImages::SortingImages('sku', 'data');

