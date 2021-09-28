<?php

namespace Database\Seeders\Projects;

use Illuminate\Database\Seeder;
use App\Models\Projects\ProjectCategory;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectCategory::factory(10)->create();
    }
}
