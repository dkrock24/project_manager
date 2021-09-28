<?php

namespace Database\Factories\Projects;

use App\Models\Projects\Project;
use App\Models\Categories\Category;
use App\Models\Projects\ProjectCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProjectCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_id' => function() {
                return Project::factory()->create()->id;
            },
            'category_id' => function() {
                return Category::factory()->create()->id;
            }
        ];
    }
}
