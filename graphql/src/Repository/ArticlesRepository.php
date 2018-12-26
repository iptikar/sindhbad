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
                'title' => 'GraphQL History',
                'content' => 'GraphQL is created by Facebook',
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
                'id' => 4,
                'title' => 'GraphQL vs Rest Round 1',
                'content' => 'GraphQL is wins 1st battle',
                'created' => new \DateTime('2017-05-01 13:20:10'),
                'author_id' => 2
            ],
            [
                'id' => 5,
                'title' => 'GraphQL vs Rest Round 2',
                'content' => 'GraphQL is wins 2nd battle',
                'created' => new \DateTime('2017-05-02 13:20:10'),
                'author_id' => 2
            ],
            [
                'id' => 6,
                'title' => 'GraphQL vs Rest Round 3',
                'content' => 'GraphQL is wins 3rd battle',
                'created' => new \DateTime('2017-05-03 13:20:10'),
                'author_id' => 2
            ],
            [
                'id' => 7,
                'title' => 'GraphQL vs Rest Round 4',
                'content' => 'GraphQL is wins 4th battle',
                'created' => new \DateTime('2017-05-04 13:20:10'),
                'author_id' => 2
            ],
            [
                'id' => 8,
                'title' => 'GraphQL vs Rest Round 5',
                'content' => 'GraphQL is wins 5th battle',
                'created' => new \DateTime('2017-05-05 13:20:10'),
                'author_id' => 2
            ],
            [
                'id' => 9,
                'title' => 'GraphQL vs Rest Round 6',
                'content' => 'GraphQL is wins 6th battle',
                'created' => new \DateTime('2017-05-06 13:20:10'),
                'author_id' => 2
            ],
            [
                'id' => 10,
                'title' => 'GraphQL vs Rest Round 7',
                'content' => 'GraphQL is wins 7th battle',
                'created' => new \DateTime('2017-05-07 13:20:10'),
                'author_id' => 2
            ]
        ];
    }
}
