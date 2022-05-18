<?php

namespace App\GraphQL\Queries\GithubProject;

use App\Models\GithubProjects;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\Facades\GraphQL;

class GithubProjectQuery extends Query
{
    protected $attributes = [
        'name' => 'GithubProject',
    ];

    public function type(): Type
    {
        return GraphQL::type('GithubProject');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::string(),
                'rules' => ['required']
            ],
        ];
    }

    public function resolve($root, $args)
    {
        return GithubProjects::findOrFail($args['id']);
    }
}