<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GithubProjects extends Model
{
    use HasFactory;

    public $incrementing = false;

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $table = 'github_projects';

    protected $fillable = [
        'user_id',
        'project_name',
        'languages',
    ];

    protected $casts = [
        'user_id'      => 'string',
        'project_name' => 'string',
        'languages'    => 'string',
    ];
}
