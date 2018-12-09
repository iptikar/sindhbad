<?php
/*
 * first install elastichq
 * https://docs.elastichq.org/installation.html#installation
 * python 2.7 is installed thefore got error 
 * 
 * Follow this
 * https://www.cloudways.com/blog/setup-elasticsearch-with-mysql/
 * 
 * */


 require 'vendor/autoload.php';
    $hosts = [
       '127.0.0.1:9200'         // IP + Port
    ];
    $client = Elasticsearch\ClientBuilder::create()->setHosts($hosts)->build();


/// Get the product json content 
//$product = file_get_contents('../ProjectJson/project.json');

// Json decode 
//$product = json_decode($product, true);

//echo "<pre>";
//print_R($product);


    
 /*

for($i = 0; $i < 100; $i++) {
    $params['body'][] = [
        'index' => [
            '_index' => 'my_index',
            '_type' => 'my_type',
            '_id' => $i
        ]
    ];

    $params['body'][] = [
        'my_field' => 'my_value',
        'second_field' => 'some more values'
    ];
}



$responses = $client->bulk($params);

*/


