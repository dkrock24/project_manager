<?php

namespace Database\Factories\Categories;

use App\Models\Companies\Company;
use App\Models\Categories\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

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
            'status' => 1,
            'company_id' => function(){
                return Company::factory()->create()->id;
            }
        ];
    }
}
