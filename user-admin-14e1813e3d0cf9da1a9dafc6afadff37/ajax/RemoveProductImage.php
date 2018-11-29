<?php
session_start();
// Go two step back include RemoveImageFromProduct.php
require '../../controller/controller.php';

require '../../controller/RemoveImageFromProduct.php';

var_dump(RemoveImageFromProduct::RemoveImage(new MarketPlace, 'sku', 'image_name'));
