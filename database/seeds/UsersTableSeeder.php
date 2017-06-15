<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administración',
            'login' => '0',
            'email' => 'edesceperu@gmail.com',
            'password' => bcrypt('123123'),
        ]);
        //User::create([
           // 'name' => 'Administración',
           // 'login' => '0',
           // 'email' => 'edesce_peru@gmail.com',
           // 'password' => '123123'
     //   ]);
    }
}
