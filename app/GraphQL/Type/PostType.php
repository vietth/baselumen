<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

/**
 * Description of PostType
 *
 * @author hblab
 */
class PostType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Post',
        'description'=> 'A Post'
    ];
    
    public function fields() {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The id of the post'
            ],
            'title' => [
                'type' => Type::string(),
                'description' => 'The title of post'
            ],
            'content' => [
                'type' => Type::int(),
                'description' => 'Is content of post'
            ]
        ];
    }
}
