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
            'tel' => '0101234567',
            'website' => 'www.webgurus.nl'
        ]);
        Company::create([
            'name' => 'One Stop Webshop',
            'streetname' => 'Handelsplein',
            'housenumber' => '122',
            'postal_code' => '3071PR',
            'city' => 'Rotterdam',
            'tel' => '0101234567',
            'website' => 'www.one-stop-webshop.nl'
        ]);
    }
}
