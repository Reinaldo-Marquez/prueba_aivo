<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            "videos"
        ]);

        // $this->call(UserSeeder::class);
        $this->call(VideoSeeder::class);
    }

    protected function truncateTables(array $tables)
    {
        DB::statement('SET foreign_key_checks=0');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET foreign_key_checks=1');
    }
}
