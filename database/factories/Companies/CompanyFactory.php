<?php

namespace Database\Factories\Companies;

use App\Models\Companies\Company;
use App\Models\Countries\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'logo' => $this->faker->text,
            'status' => 1,
            'country_id' => function() {
                return Country::factory()->create()->id;
            }
        ];
    }
}
