<?php

use Illuminate\Database\Seeder;
use App\Cohort;

class CohortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cohort::create([
            'name' => '23444',
            'begin_year' => '2015',
            'end_year' => '2016',
            'crebo_id' => 1,
        ]);
    }
}
