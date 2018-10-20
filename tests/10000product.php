<?php

 
$data = '
    {
        "sku": "SDF5DFGFGSDF",
        "name": "Original Samsung Galaxy S8 SM-G950F 4G LTE Mobile phone 64GB 5.8 Inch Single Sim 12MP 3000mAh S-series Smartphone",
        "image": "http://localhost:8888/img/1535810074086GpsfLitem_XL_23147700_32725056.jpg",
        "qty": "1",
        "price": "2500",
        "id": "5b8a9a1a4a348b2540fb9698",
        "total": 2500,
        "discount": "",
        "seller_email": "bharatrose1@gmail.com"
    }
';

$data = json_decode($data, true);


$bigdata = [];

for($i = 50000; $i <= 100000; ++$i) {
	
	
	$data['sku'] = $i;
	$data['id'] = $i;
	$bigdata[] = $data;
	
}




echo json_encode($bigdata);
