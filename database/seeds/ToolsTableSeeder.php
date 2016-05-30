<?php

use Illuminate\Database\Seeder;
use App\Tool;

class ToolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tool::create([
            'name' => 'PHP',
            'description' => 'Een serverside scripting taal',
            'status_id' => 4
        ]);
    }
}
