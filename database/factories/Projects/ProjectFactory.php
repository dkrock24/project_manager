<?php

namespace Database\Factories\Projects;

use App\Models\User;
use App\Models\Projects\Project;
use App\Models\Companies\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text,
            'description' => $this->faker->text,
            'owner_id' => function() {
                return User::factory()->create()->id;
            },
            'status' => 1,
            'company_id' => function() {
                return Company::factory()->create()->id;
            }
        ];
    }
}
