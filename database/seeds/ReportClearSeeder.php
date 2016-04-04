<?php

use Illuminate\Database\Seeder;

class ReportClearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('record_has_filters')->delete();
        DB::table('record_has_columns')->delete();
        DB::table('fields')->delete();
    }
}
