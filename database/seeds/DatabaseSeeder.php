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
        $this->call(CouncilsTableSeeder::class);
        $this->call(PostcodesTableSeeder::class);
        $this->call(SuburbsTableSeeder::class);
    }
}
