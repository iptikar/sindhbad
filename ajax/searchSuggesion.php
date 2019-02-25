<?php
// required
require '../controller/controller.php';
require '../controller/ProductNameSuggession.php';
echo json_encode(ProductNameSuggession::FetchSuggesstion('q'));
