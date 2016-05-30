<?php

use Illuminate\Database\Seeder;
use App\Internship_user;

class Internship_usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Internship_user::create([
            'internship_id' => 1,
            'user_id' => 1
        ]);
    }
}
