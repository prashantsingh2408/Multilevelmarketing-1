<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => md5('user'),
            'mobile_no' => '8080808080',
            'product'=> 'package 500',
            'track_id'=> 'GF100000'
        ]);
    }
}