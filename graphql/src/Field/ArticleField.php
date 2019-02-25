<?php
 
namespace StarTutorial\Field;
 
 
use StarTutorial\Repository\ArticlesRepository;
use StarTutorial\Type\ArticleType;
use Youshido\GraphQL\Config\Field\FieldConfig;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQL\Field\AbstractField;
use Youshido\GraphQL\Type\Scalar\IntType;
 
class ArticleField extends AbstractField
{
    public function getType()
    {
        return new ArticleType();
    }
 
    public function build(FieldConfig $config)
    {
        $config->addArgument('id', new IntType());
    }
 
    public function resolve($value, array $args, ResolveInfo $info)
    {
        $all = ArticlesRepository::findAll();
		
		// Get the records 
		$rec = [];
		
        foreach ($all as $single) {
           
            if ($single['id'] === $args['id']) {
                
                return $single;
            }
        }
 
        return null;
    }



}
