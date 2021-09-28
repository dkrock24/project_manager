<?php

namespace Database\Seeders\Projects;

use Illuminate\Database\Seeder;
use App\Models\Projects\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::factory(5)->create();
    }
}
