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
            'email' => 'tim@borowy.nl',
            'password' => bcrypt('password'),
            'role_id' => 1,
            'contact_id' => 1
        ]);
    }
}
