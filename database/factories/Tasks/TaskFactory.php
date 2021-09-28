<?php

namespace Database\Factories\Tasks;

use App\Models\Tasks\Task;
use App\Models\Projects\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

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
            'project_id' => function(){
                return Project::factory()->create()->id;
            },
            'status' => 1
        ];
    }
}
