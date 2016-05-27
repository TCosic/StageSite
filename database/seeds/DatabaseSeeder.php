<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(ToolsTableSeeder::class);
        $this->call(CrebosTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CohortsTableSeeder::class);
        $this->call(Internship_usersTableSeeder::class);
        $this->call(InternshiptoolsTableSeeder::class);
        $this->call(InternshipTableSeeder::class);
    }
}
