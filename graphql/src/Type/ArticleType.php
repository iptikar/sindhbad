<?php
namespace StarTutorial\Type;
 
 
use Youshido\GraphQL\Type\NonNullType;
use Youshido\GraphQL\Type\Object\AbstractObjectType;
use Youshido\GraphQL\Type\Scalar\DateTimeType;
use Youshido\GraphQL\Type\Scalar\IntType;
use Youshido\GraphQL\Type\Scalar\StringType;
 
class ArticleType extends AbstractObjectType
{
    public function build($config)
    {
        $config->addFields([
            'id' => new NonNullType(new IntType()),
            'title' => new StringType(),
            'content' => new StringType(),
            'created' => new DateTimeType(),
            'author_id' => new NonNullType(new IntType()),
            
        ]);
    }
 
}
