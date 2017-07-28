<?php

use App\Role;
use App\Subject;
use Illuminate\Database\Seeder;
use App\User;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        Subject::create([
            'name' => 'PHP',
            'level' => 'Básico',
            'description' => 'Curso de PHP desde cero'
        ]);
        // 2
        Subject::create([
            'name' => 'Laravel',
            'level' => 'Básico',
            'description' => 'Curso de Laravel desde cero'
        ]);

    }
}
