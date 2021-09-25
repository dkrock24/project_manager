<?php

namespace Database\Factories\Countries;

use App\Models\Countries\Country;
use App\Models\Currencies\Currency;
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
