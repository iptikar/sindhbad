<?php

require '../controller/controller.php';

// Get object 
$obj = new MarketPlace();


	// Gettting the shipping details 
	
	
// Variable required for the pages 

 	$shippingInJson = $this->buyerShippingAsArray();
	$firstname = $shippingInJson['firstname'] ?? '';
	$lastname = $shippingInJson['lastname'] ?? '';
	$phonenumber = $shippingInJson['mobile_no'] ?? '';

	// Cart array items required 
	$cartItems = $_COOKIE[$this->CartName()];
	// Cart items in array 
	$cartItemsInarray = json_decode($cartItems, true);
	
	// Tax and vad 
	$taxOrvat = $this->getPriceFormate($this->TaxOnCart());
	$cartTotalAmount = $this->getPriceFormate($this->CartTotleAmountWithTax());
	$shippingcost = $this->ShippingCostApply() === true ? 20 .' AED': 'Free Sipping'; 
	
	// Get the logged in user email address 
	
	$to = $this->BuyerSession()->email;;
	
	$orderNumber = '565656565sdf';
	$orderdate = '2017-08-09';
	
	$address = ucfirst(implode(', ', array_filter($shippingInJson)));
	
	
	$data = ['firstname' =>$firstname,
			'lastname' => $lastname,
			'orderNumber' => $orderNumber,
			'phonenumber' => $phonenumber,
			'address' => $address,
			'cartItems' => $cartItems,
			'taxOrvat' => $taxOrvat,
			'cartTotalAmount' => $cartTotalAmount,
			'orderdate' => $orderdate,
			'shippingcost' => $shippingcost,
			'to'=> $to
			];
	
	$sendConfirmation = new OrderConfirmationEmail($data
																
								);
	
	
	
	
	
