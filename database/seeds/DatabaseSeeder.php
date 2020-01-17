<?php

use Illuminate\Database\Seeder;
use App\Groups;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GroupsSeeder::class);
        $this->call(StudentsSeeder::class);
    }
}
