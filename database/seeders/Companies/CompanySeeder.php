<?php

namespace Database\Seeders\Companies;

use Illuminate\Database\Seeder;
use App\Models\Companies\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::factory(10)->create();
    }
}
