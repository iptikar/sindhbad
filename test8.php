<?php 

require 'controller/OrderConfirmationEmail.php';

$obj = new order\confirmation\email\OrderConfirmationEmail;
var_dump( $obj->test());
