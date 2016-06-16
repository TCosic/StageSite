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
            'first_name' => 'Timothy',
            'last_name' => 'Eksdee',
            'email' => 'tim@borowy.nl',
            'password' => bcrypt('password'),
            'role_id' => 1,
            'contact_id' => 1
        ]);

        User::create([
            'first_name' => 'Old',
            'last_name' => 'Trickster',
            'email' => 'edge@lord.jpeg',
            'password' => bcrypt('weow'),
            'role_id' => 1,
            'contact_id' => 2
        ]);
    }
}
