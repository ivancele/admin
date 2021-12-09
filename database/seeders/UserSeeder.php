<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create a staff member
        User::factory()->create([
            'title' => 'Mr',
            'firstNames' => 'Njabulo Ivan',
            'lastName' => 'Cele',
            'email' => 'ivan@portal.test',
            'role' => 'staff',
            'section' => null,
            'grade' => null,
        ]);
       //create 10 just random users
        // User::factory(10)->create();

        //create students
        User::factory(20)->create([
            'role' => 'student',
        ]);

        //create 10 suspended students
        User::factory(10)->create([
            'role' => 'student',
            'suspended' => true,
        ]);

        //create 15 parents
        User::factory(15)->create([
            'role' => 'parent',
            'section' => null,
            'grade' => null,
        ]);
    }
}
