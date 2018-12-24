<?php

 require_once 'vendor/autoload.php';
 
    use StarTutorial\Field\ArticleField;
    use Youshido\GraphQL\Execution\Processor;
    use Youshido\GraphQL\Schema\Schema;
    use Youshido\GraphQL\Type\Object\ObjectType;
 
   
 
    $processor = new Processor(new Schema([
        'query' => new ObjectType([
            'name' => 'RootQueryType',
            'fields' => [
                new ArticleField()
            ]
        ]),
    ]));
 
    $processor->processPayload('{ article(id:2){id,title,content} }');
 
    echo '<pre>';
    echo json_encode($processor->getResponseData()) . "\n";
    echo '<pre>';
