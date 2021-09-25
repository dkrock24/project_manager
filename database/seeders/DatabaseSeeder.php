<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Companies\CompanySeeder;
use Database\Seeders\Countries\CountrySeeder;
use Database\Seeders\Currencies\CurrencySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CurrencySeeder::class,
            CountrySeeder::class,
            CompanySeeder::class
        ]);
    }
}
