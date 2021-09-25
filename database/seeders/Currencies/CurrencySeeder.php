<?php

namespace Database\Seeders\Currencies;

use Illuminate\Database\Seeder;
use App\Models\Currencies\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::factory(10)->create();
    }
}
