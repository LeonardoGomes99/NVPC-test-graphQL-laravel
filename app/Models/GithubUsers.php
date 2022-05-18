<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GithubUsers extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $primaryKey = 'id';

    protected $table = 'github_users';

    protected $fillable = [
        'name',
        'email',
        'username',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'name'     => 'string',
        'email'    => 'string',
        'username' => 'string',
    ];
}
