<?php

use Illuminate\Database\Seeder;
use App\Education;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::create([
            'leerweg' => 'BBL',
            'location_id' => 1,
            'cohort_id' => 1
        ]);
    }
}
