<?php

use App\Role;
use Illuminate\Database\Seeder;
use App\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        Role::create([
            'name' => 'Administrator'
        ]);
        // 2
        Role::create([
            'name' => 'Visitor'
        ]);

    }
}
