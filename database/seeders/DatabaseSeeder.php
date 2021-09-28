<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\Roles\RoleSeeder;
use Database\Seeders\Tasks\TaskSeeder;
use Database\Seeders\Projects\ProjectSeeder;
use Database\Seeders\Companies\CompanySeeder;
use Database\Seeders\Countries\CountrySeeder;
use Database\Seeders\Categories\CategorySeeder;
use Database\Seeders\Currencies\CurrencySeeder;
use Database\Seeders\Projects\ProjectCategorySeeder;

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
            CompanySeeder::class,
            CategorySeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            ProjectSeeder::class,
            ProjectCategorySeeder::class,
            TaskSeeder::class,
        ]);
    }
}
