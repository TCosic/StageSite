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
            'name' => '',
            'begin_year' => '',
            'end_year' => '',
            'crebo_id' => '',
        ]);
    }
}
