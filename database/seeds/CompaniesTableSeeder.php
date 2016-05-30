<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'Webguru\'s',
            'streetname' => 'blablastraat',
            'housenumber' => '123',
            'postal_code' => '1234AB',
            'city' => 'Rotterdam',
            'tel' => '0101234567'
        ]);
    }
}
