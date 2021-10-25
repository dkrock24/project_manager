<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\TaskSeeder;
use Database\Seeders\ProjectSeeder;
use Database\Seeders\CompanySeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\CurrencySeeder;
use Database\Seeders\ProjectCategorySeeder;

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
