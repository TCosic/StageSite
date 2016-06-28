<?php

use Illuminate\Database\Seeder;
use App\Internship;

class InternshipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Internship::create([
            'start_date' => '2016-01-01',
            'end_date' => '2016-07-01',
            'description' => 'de beschrijving bla bla bla bla',
            'contact_id' => 1,
            'status_id' => 3,
            'education_id' => 1
        ]);
        Internship::create([
            'start_date' => '2016-01-01',
            'end_date' => '2016-09-01',
            'description' => 'de beschrijving bla bla bla bla',
            'contact_id' => 2,
            'status_id' => 3,
            'education_id' => 1
        ]);
    }
}
