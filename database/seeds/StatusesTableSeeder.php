<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'name' => 'Allowed',
        ]);
        Status::create([
            'name' => 'To be moderated',
        ]);
        Status::create([
            'name' => 'Available',
        ]);
        Status::create([
            'name' => 'Active',
        ]);
        Status::create([
            'name' => 'Disabled',
        ]);
        Status::create([
            'name' => 'Public',
        ]);
        Status::create([
            'name' => 'Private',
        ]);
    }
}
