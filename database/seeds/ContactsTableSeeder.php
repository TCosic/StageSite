<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'name' => 'Tim',
            'middle_name' => '',
            'last_name' => 'Borowy',
            'email' => 'tim@borowy.nl',
            'tel' => '0180123456',
            'mobile' => '0612345678',
            'company_id' => 1
        ]);
        Contact::create([
            'name' => 'peter',
            'middle_name' => '',
            'last_name' => 'jansen',
            'email' => 'peter@gmail.nl',
            'tel' => '0180123456',
            'mobile' => '0612345678',
            'company_id' => 2
        ]);
    }
}
