<?php

require '../controller/controller.php';

// Get object 
$obj = new MarketPlace();


	// Gettting the shipping details 
	$shippingInJson = $obj->buyerShippingAsArray();
	
// Variable required for the pages 
	$firstname = $shippingInJson['firstname'] ?? '';
	$lastname = $shippingInJson['lastname'] ?? '';
	
	
	$orderNumber = '565656565sdf';
	$phonenumber = $shippingInJson['mobile_no'] ?? '';
	
	$address = 'Sheikh Mohammed Bin Rashed Boulevard, Downtown Dubai, 31166 - Dubai';
	
	// Cart array items required 
	$cartItems = $_COOKIE[$obj->CartName()];
	// Cart items in array 
	$cartItemsInarray = json_decode($cartItems, true);
	
	// Tax and vad 
	$taxOrvat = $obj->getPriceFormate($obj->TaxOnCart());
	
	// Cart total amount 
	// $obj->getPriceFormate($obj->CartTotleAmount());
	// $obj->getPriceFormate($obj->CartTotleAmountWithTax());
	$cartTotalAmount = $obj->getPriceFormate($obj->CartTotleAmountWithTax());
	
	$orderdate = '2017-08-09';
	
	$shippingcost = $obj->ShippingCostApply() === true ? 20 .' AED': 'Free Sipping'; 
	
	
	
	require '../controller/OrderConfirmationEmail.php';
	
	$data = ['firstname' =>$firstname,
			'lastname' => $lastname,
			'orderNumber' => $orderNumber,
			'phonenumber' => $phonenumber,
			'address' => $address,
			'cartItems' => $cartItems,
			'taxOrvat' => $taxOrvat,
			'cartTotalAmount' => $cartTotalAmount,
			'orderdate' => $orderdate,
			'shippingcost' => $shippingcost
			];
	
	$obj = new OrderConfirmationEmail($data
																
								);
	
	
	
	
	
