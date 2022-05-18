<?php

namespace App\GraphQL\Types;

use App\Models\GithubProjects;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use Rebing\GraphQL\Support\Facades\GraphQL;

class GithubProjectsType extends GraphQLType
{
    protected $attributes = [
        'title' => 'GithubProjects',
        'description' => 'Collection of Github Projects',
        'model' => GithubProjects::class
    ];


    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Id of a particular github projects',
            ],
            'user_id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'project owner id',
            ],
            'project_name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'project name',
            ],
            'languages' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'language most used on project',
            ],
        ];
    }
}