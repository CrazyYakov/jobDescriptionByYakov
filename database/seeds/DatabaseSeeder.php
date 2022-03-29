<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    const NAME_INSTITUT = "Институт";
    const NAME_JOB_POSITION = "Директор";
    const DESCRIPTION = "Описание...";


    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutions')->insert([
            'name' => self::NAME_INSTITUT,
            'description' => self::DESCRIPTION
        ]);

        DB::table('job_positions')->insert([
            'name' => self::NAME_JOB_POSITION,
            'description' => self::DESCRIPTION
        ]);
    }
}
