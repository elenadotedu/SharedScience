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
        // $this->call(UserTableSeeder::class);
        DB::table('genders_lookup')->insert(
            ['code' => 'F', 'name' => 'Female']);

        DB::table('genders_lookup')->insert(
            ['code' => 'M', 'name' => 'Male']);

        DB::table('registration_statuses')->insert(
            ['name' => 'Confirmed']);
    }
}
