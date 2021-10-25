<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Role::class;

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
            'company_id' => function() {
                return Company::factory()->create()->id;
            }
        ];
    }
}
