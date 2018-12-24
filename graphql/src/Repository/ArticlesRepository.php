<?php
namespace StarTutorial\Repository;
 
class ArticlesRepository
{
    public static function findAll()
    {
        return [
            [
                'id' => 1,
                'title' => 'My First GraphQL API',
                'content' => 'It is all about GraphQL',
                'created' => new \DateTime('2017-02-24 11:20:10'),
                'author_id' => 1,
            ],
            [
                'id' => 2,
                'title' => 'Son of bith',
                'content' => 'Mother Fucker ',
                'created' => new \DateTime('2017-03-27 12:20:10'),
                'author_id' => 2
            ],
            [
                'id' => 3,
                'title' => 'GraphQL vs Rest',
                'content' => 'GraphQL is a query language, whereas Rest is a protocol',
                'created' => new \DateTime('2017-04-30 13:20:10'),
                'author_id' => 2
            ],
             [
                'id' => 2,
                'title' => 'GraphQL vs Rest',
                'content' => 'GraphQL is a query language, whereas Rest is a protocol',
                'created' => new \DateTime('2017-04-30 13:20:10'),
                'author_id' => 2
            ]
        ];
    }
}
