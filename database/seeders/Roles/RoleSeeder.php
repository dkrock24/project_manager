<?php

namespace Database\Seeders\Roles;

use App\Models\Roles\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::factory(10)->create();
    }
}
