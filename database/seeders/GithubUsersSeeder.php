<?php

namespace Database\Seeders;

use App\Models\GithubUsers;
use Illuminate\Database\Seeder;

class GithubUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GithubUsers::factory()->create();
    }
}
