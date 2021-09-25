<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use App\Models\Countries\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::factory(10)->create();
    }
}
