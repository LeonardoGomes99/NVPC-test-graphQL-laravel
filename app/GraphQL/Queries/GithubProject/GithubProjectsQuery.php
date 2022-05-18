<?php

namespace  App\GraphQL\Queries\GithubProject;

use App\Models\GithubProjects;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\Facades\GraphQL;

class GithubProjectsQuery extends Query
{
    protected $attributes = [
        'name' => 'GithubProjects',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('GithubProjects'));
    }

    public function resolve($root, $args)
    {
        return GithubProjects::all();
    }
}