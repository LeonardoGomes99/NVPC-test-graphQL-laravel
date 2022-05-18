<?php

namespace App\GraphQL\Mutations\GithubProject;

use App\Models\GithubProjects;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreateGithubProjectMutation extends Mutation
{
    protected $attributes = [
        'name' => 'GithubProject',
        'description' => 'Creates a category'
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
                'type' => Type::nonNull(Type::string()),
            ],
            'user_id' => [
                'name' => 'user_id',
                'type' => Type::nonNull(Type::string()),
            ],
            'project_name' => [
                'name' => 'project_name',
                'type' => Type::nonNull(Type::string()),
            ],
            'languages' => [
                'name' => 'languages',
                'type' =>  Type::nonNull(Type::string()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $githubProject = new GithubProjects();
        $githubProject->fill($args);
        $githubProject->save();

        return $githubProject;
    }
}