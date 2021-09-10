<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => md5('admin'),
        ]);

        // \DB::table('admins')->delete();
        
        
        
    }
}