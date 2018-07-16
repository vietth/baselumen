<?php
namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use App\Post;

class PostsQuery extends Query
{
    protected $attributes = [
        'name' => 'posts'
    ];
    
    public function type() {
        return Type::listOf(GraphQL::type('Posts'));
    }
    
    public function args()
    {
        return [
            'id' => ['name' => 'id','type' => Type::string()],
            'title' => ['name' => 'title', 'type' => Type::string()],
            'content' => ['name' =>'content', 'type'=>Type::string()]
        ];
    }
    
    public function resolve($root, $arg) 
    {
         if (isset($args['id'])) {
            return Post::where('id' , $args['id'])->get();
        } else if(isset($args['user_id'])) {
            return Post::where('user_id' , $args['user_id'])->get();
        } else {
            return Post::all();
        }
    }
}
