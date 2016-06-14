<?php

use Illuminate\Database\Seeder;
use App\Crebo;

class CrebosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Crebo::create([
            'name' => 'Media Ontwikkeling',
            'number' => '12345',
        ]);

        Crebo::create([
            'name' => 'Applicatie Ontwikkeling',
            'number' => '32445',
        ]);
    }
}
