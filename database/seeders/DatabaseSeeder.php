<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
        $this->call(AdminsTableSeeder::class);
        $this->call(PinsTableSeeder::class);
        $this->call(TdsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
