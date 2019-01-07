<?php
# initializing composer
require __DIR__ . '/vendor/autoload.php';
 
# the CouchDB client object
use  PHPOnCouch\CouchClient;
 
# making a db connection
$client = new couchClient(
 "http://localhost:5984/", # host / DSN
 "superheroes" # database # this database must exist
);


/* INSERTING DOCUMENT */
// Setting data 
$data = '[
  {
    "_id": "5c333199f153abbc3c64d343",
    "index": 0,
    "guid": "ed298289-2675-4fdc-acf0-9c4ca27a96c2",
    "isActive": false,
    "balance": "$2,997.10",
    "picture": "http://placehold.it/32x32",
    "age": 24,
    "eyeColor": "blue",
    "name": {
      "first": "Carrillo",
      "last": "Peterson"
    }
  },
  {
    "_id": "5c3331997f68543cc7a46c47",
    "index": 1,
    "guid": "152251f3-c591-48b7-9929-6b82cdad3778",
    "isActive": true,
    "balance": "$1,897.08",
    "picture": "http://placehold.it/32x32",
    "age": 37,
    "eyeColor": "blue",
    "name": {
      "first": "Moss",
      "last": "Byers"
    }
  },
  {
    "_id": "5c33319969d1822b208efb0f",
    "index": 2,
    "guid": "1aea8342-b119-4d0e-b649-5eb73ee9fc74",
    "isActive": false,
    "balance": "$2,414.72",
    "picture": "http://placehold.it/32x32",
    "age": 31,
    "eyeColor": "green",
    "name": {
      "first": "Jenna",
      "last": "Parker"
    }
  },
  {
    "_id": "5c333199695a288605e4242b",
    "index": 3,
    "guid": "e1b1a417-8b92-49c2-8dbd-a8868dee3c5f",
    "isActive": true,
    "balance": "$2,665.97",
    "picture": "http://placehold.it/32x32",
    "age": 20,
    "eyeColor": "brown",
    "name": {
      "first": "Nicole",
      "last": "Mcclure"
    }
  },
  {
    "_id": "5c33319968cf0530b3ec00db",
    "index": 4,
    "guid": "372705b5-fc74-4a9a-8996-f6d4e49d64e3",
    "isActive": true,
    "balance": "$2,127.85",
    "picture": "http://placehold.it/32x32",
    "age": 32,
    "eyeColor": "blue",
    "name": {
      "first": "Nadia",
      "last": "Mercer"
    }
  },
  {
    "_id": "5c333199a5a5133b61990700",
    "index": 5,
    "guid": "040a02cb-7c19-44a1-b4a7-ec181dec185e",
    "isActive": false,
    "balance": "$2,255.54",
    "picture": "http://placehold.it/32x32",
    "age": 38,
    "eyeColor": "green",
    "name": {
      "first": "Mayer",
      "last": "Dyer"
    }
  },
  {
    "_id": "5c3331991ac211b1806b294e",
    "index": 6,
    "guid": "7197a188-2018-49d6-967a-2c93f4368e0d",
    "isActive": true,
    "balance": "$2,993.73",
    "picture": "http://placehold.it/32x32",
    "age": 32,
    "eyeColor": "blue",
    "name": {
      "first": "Patterson",
      "last": "Kemp"
    }
  },
  {
    "_id": "5c3331999147cc5e70fba6cf",
    "index": 7,
    "guid": "4bdde48c-9319-4e13-955f-ef10abdafb77",
    "isActive": false,
    "balance": "$2,717.31",
    "picture": "http://placehold.it/32x32",
    "age": 28,
    "eyeColor": "brown",
    "name": {
      "first": "Leonard",
      "last": "Hoffman"
    }
  },
  {
    "_id": "5c333199a0b700acb2085af7",
    "index": 8,
    "guid": "be86f351-f83d-4cee-9d1b-ce4bfc4359aa",
    "isActive": true,
    "balance": "$3,089.36",
    "picture": "http://placehold.it/32x32",
    "age": 34,
    "eyeColor": "green",
    "name": {
      "first": "Audrey",
      "last": "Faulkner"
    }
  }
]';
/* CLOSING INSERTING DOCUMENT */

$DataStd = new stdClass();

//$DataStd->products = json_decode($data, true);



/*
foreach(json_decode($data) as $key => $value) {
	
	
	
	$response = $client->storeDoc($value);
}

*/

/*
 * 	UPDATE DOCUMENT 
 * 
 
 
  
 $id = '5c3331991ac211b1806b294e';
 $getDocument = $client->getDoc($id);
 $product_rev = $getDocument->_rev;
 $updated_product = $getDocument;
 $updated_product->age = '25';
 $updated_product->eyeColor = 'blue';
 $response = $client->storeDoc($updated_product);


*/


//echo "<pre>";

//print_r(json_decode($response , true));

//print_r(json_decode($data, true));
//print_R($response);
//echo "</pre>";


/*
 * 	DELETING DOCUMENT
 * */

//$id = '09989a720d7eff11c2a454eba40012a8';
//$getDocument = $client->getDoc($id);
//$deleteIt = $client->deleteDoc($getDocument);
 
 
