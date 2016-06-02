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
            'name' => 'sept 2014 - july 2017',
            'begin_year' => '2014',
            'end_year' => '2014',
            'crebo_id' => 1,
        ]);
    }
}
