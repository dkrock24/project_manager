<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Country::class;

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
            'flag' => $this->faker->text,
            'status' => 1,
            'currency_id' => function() {
                return Currency::factory()->create()->id;
            }
        ];
    }
}
