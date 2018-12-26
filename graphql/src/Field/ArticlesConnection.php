<?php
namespace StarTutorial\Field;
 
 
use StarTutorial\Repository\ArticlesRepository;
use StarTutorial\Type\ArticleType;
use Youshido\GraphQL\Config\Field\FieldConfig;
use Youshido\GraphQL\Execution\ResolveInfo;
use Youshido\GraphQL\Field\AbstractField;
use Youshido\GraphQL\Relay\Connection\ArrayConnection;
use Youshido\GraphQL\Relay\Connection\Connection;
use Youshido\GraphQLExtension\Type\CursorResultType;
use Youshido\GraphQLExtension\Type\Sorting\SortingParamsType;
 
class ArticlesConnection extends AbstractField
{
 
    public function getType()
    {
        return new CursorResultType(new ArticleType());
    }
 
    public function build(FieldConfig $config)
    {
        $this->addArguments(array_merge(
            Connection::connectionArgs(),
            ['sort' => new SortingParamsType(new ArticleType(), ['id'])]
        ));
    }
 
    public function resolve($value, array $args, ResolveInfo $info)
    {
        $result = ArticlesRepository::findAll();
 
        $result = $this->sortedResult($result, $args);
 
        return ArrayConnection::connectionFromArray($result, $args);
    }
 
    private function sortedResult($result, array $args)
    {
        if (!isset($args['sort'])) {
            return $result;
        }
 
        $field = $args['sort']['field'];
 
        $order = $args['sort']['order'];
 
        uasort($result, function ($a, $b) use ($field, $order) {
            if (1 == $order) {
                return $a[$field] - $b[$field];
            }
            if (-1 == $order) {
                return $b[$field] - $a[$field];
            }
        });
 
        return $result;
    }
}
