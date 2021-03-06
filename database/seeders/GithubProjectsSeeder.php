<?php

namespace Database\Seeders;

use App\Models\GithubProjects;
use Illuminate\Database\Seeder;

class GithubProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GithubProjects::factory()->create();
    }
}
