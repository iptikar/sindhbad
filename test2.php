<?php 




$a = '{
   "_csrf":"HP4vWusY-l68BZ_qzscqw9DsJ-sgOTiVdP4w",
   "product_name":"ZNP Protective Film For Samsung Galaxy Note 8 S8 S9 Plus Soft Full Curved Screen Protector Film For Samsung Note 8 ( Not Glass )",
   "discription":"ZNP Protective Film For Samsung Galaxy Note 8 S8 S9 Plus Soft Full Curved Screen Protector Film For Samsung Note 8 ( Not Glass )",
   "short-discription":"ZNP Protective Film For Samsung Galaxy Note 8 S8 S9 Plus Soft Full Curved Screen Protector Film For Samsung Note 8 ( Not Glass )",
   "date-available-from":"2018-07-30 16:30",
   "date-available-to":"2018-11-13 16:30",
   "category":"women\'s Clothing#2e3615a0207491",
   "sub-category":"Bottoms#2e3615a02074912",
   "sub-sub-category":"Pants & Capris#2e3615a020749124",
   "sku":"sesdfsdf",
   "regular-price":"10",
   "special-price":"10",
   "special-price-from":"",
   "special-price-to":"",
   "items-available":"100",
   "seller-type":"whole-sale",
   "avaibility":"0",
   "min-order":"10",
   "tax-class":"1",
   "shipping_cost":"free",
   "status":"1",
   "unite-amount":"1",
   "product-unite":"grams",
   "product-condition":"brandnew",
   "country":"AL",
   "country-phone-code":"AZ",
   "phone":"0522336666",
   "warrenty":"1 yes",
   "delivery_period":"2 days",
   "delivery-service":"pick up",
   "spcification-title[]":"Hello",
   "spcification-value[]":"World",
   "weblink":"",
   "youtube-link":"",
   "facebook-link":"",
   "saller-note":"",
   "latitude":"-50.895199",
   "longitude":"-50.895199",
   "product-articles-html":"<p>hello</p>\r\n",
   "meta_title":"",
   "meta_keywords":"",
   "meta_description":"",
   "submit":""
}';


$incomming_data = 	'{  
					"_csrf":"/.{2,150}/",
				   "product_name":" /.{2,150}/",
				   "discription":" /.{2,150}/",
				   "short-discription":"/.{2,150}/",
				   "date-available-from":"/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[ ][\d]{2}:[\d]{2}$/",
				   "date-available-to":"/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[ ][\d]{2}:[\d]{2}$/",
				   "category":"/.{2,150}/",
				   "sub-category":"/.{2,150}/",
				   "sub-sub-category":"/.{2,150}/",
					"sku":"/[0-9a-zA-Z_\-]{2,50}$/",
				   "regular-price":"/[0-9]{1,}$/",
				   "special-price":"",
				   "special-price-from":"",
				   "special-price-to":"",
				   "items-available":"/[0-9]$/",
				   "seller-type":"/[0-9a-zA-Z ]$/",
				   "avaibility":"/[0-9a-zA-Z ]$/",
				   "min-order":"/[0-9A-Za-z]{1,}$/",
				   "tax-class":"/[0-9a-zA-Z ]$/",
				   "shipping_cost":"/[0-9A-Za-z]{1,}$/",
				   "status":"/[0-9a-zA-Z ]$/",
				   "unite-amount":"/[0-9a-zA-Z ]$/",
				   "product-unite":"/[0-9a-zA-Z ]$/",
				   "product-condition":"/[0-9a-zA-Z ]$/",
				   "country":"/[0-9a-zA-Z ]$/",
				   "country-phone-code":"/[0-9a-zA-Z\+ ]$/",
				   "phone":"/[0-9]{10,15}$/",
				   "warrenty":"/[0-9A-Za-z]{1,}$/",
				   "delivery_period":"/[0-9A-Za-z]{1,}$/",
				   "spcification-title[]":"",
				   "spcification-value[]":"",
				   "weblink":"",
				   "youtube-link":"",
				   "facebook-link":"",
				   "saller-note":"",
				   "latitude":"/^(\+|-)?(?:90(?:(?:\.0{1,8})?)|(?:[0-9]|[1-8][0-9])(?:(?:\.[0-9]{1,8})?))$/",
				   "longitude":"/^(\+|-)?(?:180(?:(?:\.0{1,8})?)|(?:[0-9]|[1-9][0-9]|1[0-7][0-9])(?:(?:\.[0-9]{1,8})?))$/",
				   "product-articles-html":"",
				   "meta_title":"",
				   "meta_keywords":"",
				   "meta_description":"",
				   "submit":""
}';

$error = json_last_error();
echo $error;

$server = json_decode($incomming_data);
//$client = json_decode($a, false);
echo "<pre>";

var_dump($server);

echo "</pre>";
