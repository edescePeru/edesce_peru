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
            'code' => 'ADMIN01',
            'ciudad' => '',
            'celular' => '989985412',
            'dni' => '20602155',
            'role_id' => 1,
        ]);
    }
}
