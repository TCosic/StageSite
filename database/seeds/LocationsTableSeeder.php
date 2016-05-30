<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
            'streetname' => 'Posthumalaan',
            'housenumber' => '121',
            'postal_code' => '1234AB',
            'city' => 'Rotterdam',
            'school_id' => 1,
        ]);
    }
}
