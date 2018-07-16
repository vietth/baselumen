<?php
namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'User',
        'description'=> 'A user'
    ];
    
    
    public function fields() {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The id of the user'
            ],
            'email' => [
                'type' => Type::string(),
                'description' => 'The email of user'
            ],
            'is_admin' => [
                'type' => Type::int(),
                'description' => 'Is admin or not'
            ]
        ];
    }
    
    protected function resolveEmailField($root, $arg) {
        return strtolower($root->email);
    }
}
