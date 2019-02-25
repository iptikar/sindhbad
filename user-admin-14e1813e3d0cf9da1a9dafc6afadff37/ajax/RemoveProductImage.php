<?php
session_start();
// Go two step back include RemoveImageFromProduct.php
require '../../controller/controller.php';
require '../../controller/RemoveImageFromProduct.php';
echo RemoveImageFromProduct::RemoveImage(new MarketPlace, 'sku', 'image_name');
