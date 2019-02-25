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

  $params = [
                    'index' => 'articles',
                    'body' => [
                        'mappings' => [
                            'article' => [
                                'properties' => [
                                    'id' => [
                                        'type' => 'integer'
                                     
                                    ],
                                    'article_name' => [
                                        'type' => 'text'
                                     
                                    ],
                                    'article_content' => [
                                        'type' => 'text'
                                     
                                    ],
                                    'article_url' => [
                                        'type' => 'text'
                                     
                                    ],
                                    'category_name' => [
                                        'type' => 'text'
                                     
                                    ],
                                    'username' => [
                                        'type' => 'text'
                                     
                                    ],
                                    'date' => [
                                        'type' => 'date',
                                        'format' => 'dd-MM-yyyy'
                                    ],
                                    'article_img' => [
                                        'type' => 'text'
                                     
                                    ],
                                ]
                            ]
                        ]
                    ]
                ];
*/

//$client->indices()->create($params);


/*
for($i = 0; $i < 100; $i++) {
    $params['body'][] = [
        'index' => [
            '_index' => 'my_index',
            '_type' => 'my_type',
            '_id' => $i
        ]
    ];

    $params['body'][] = ['id' => $i,
						'article_name' => 'df', 
						'article_content' => 'df', 
						'article_url' => 'sdf', 
						'category_name' => 'dsf', 
						'username' => 'sdf ', 
						'date' => '02-02-1988', 
						'article_img' => 'asdf ' ];
}



$responses = $client->bulk($params);

*/


/*
 * ==============================================
 * 	NOW ADDING NEW DOCUMENT 
 * ==============================================
 * */

/*
$params = [
			'index' => 'my_index', 
			'type' => 'my_type', 
			'id' => 101, 

			'body' => [
						'article_name' => 'Hi hi ha', 
						'article_content' => 'Content', 
						'article_url' => 'no', 
						'category_name' => 'fuck you', 
						'username' => 'dick head', 
						'date' => '02-02-1988', 
						'article_img' => 'fuckyou', ]
					];
					
$responses = $client->index($params);
*/



/*
 * ==============================================
 * 	NOW UPDATING NEW DOCUMENT 
 * 	Using above same paramaters 
 * ==============================================
 * */
 
 
 /*

 $params = [
			'index' => 'my_index', 
			'type' => 'my_type', 
			'id' => 99, 
					
		];
		
$params['body']['doc']  = [
						'article_name' => '', 
						'article_content' => '', 
						'article_url' => '', 
						'category_name' => '', 
						'username' => '', 
						'date' =>'02-02-2018', 
						'article_img' => '', 
					];
			


$responses = $client->update($params);

*/
 

/*
 * ==============================================
 * 	NOW GET THE DOCUMENT 
 * 	Using above same paramaters 
 * ==============================================
 */
 
 /*
 $params = [
			'index' => 'my_index', 
			'type' => 'my_type', 
			'id' => 99, 
					
		];


 $responses = $client->get($params);
 
 
echo "<pre>";
print_r($responses);
echo '</pre>';

*/


/*
 * ==============================================
 * 	NOW DELETINGG OLD DOCUMENT 
 * 	Using above same paramaters 
 * ==============================================
 * 
 
  $params = ['index' => 'my_index', 'type' => 'my_type', 'id' => 101, ];
  
   $responses = $client->delete($params);
   
   
 */
