<?php

 require_once 'vendor/autoload.php';

 
use StarTutorial\Field\ArticleField;
use StarTutorial\Field\ArticlesConnection;
use Youshido\GraphQL\Execution\Processor;
use Youshido\GraphQL\Schema\Schema;
use Youshido\GraphQL\Type\Object\ObjectType;
 

 
$processor = new Processor(new Schema([
    'query' => new ObjectType([
        'name' => 'RootQueryType',
        'fields' => [
            new ArticleField(),
            new ArticlesConnection()
        ]
    ]),
]));
 
$processor->processPayload(
    '{ articlesConnection(first:2, sort: {field: id, order: DESC}){edges { node { id, title } cursor }, pageInfo { endCursor hasNextPage }} }'
);
 
echo '<pre>';
echo json_encode($processor->getResponseData()) . "\n";
echo '<pre>';
