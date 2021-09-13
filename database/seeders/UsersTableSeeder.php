<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => 'ee11cbb19052e40b07aac0ca060c23ee',
                'mobile_no' => '8080808080',
                'track_id' => 'GF100000',
                'member_id' => NULL,
                'sponsor_id' => NULL,
                'sponsor_name' => NULL,
                'product' => 'package 500',
                'joining_date_from' => NULL,
                'joining_date_to' => NULL,
                'block_member' => NULL,
                'unblock_member' => NULL,
                'activation_date_to' => NULL,
                'activation_date_from' => NULL,
                'top_up' => NULL,
                'referal_link' => NULL,
                'status' => NULL,
                'pins' => NULL,
                'gender' => NULL,
                'marital_status' => NULL,
                'pincode' => NULL,
                'adhar_no' => NULL,
                'pan_no' => NULL,
                'area' => NULL,
                'city' => NULL,
                'state' => NULL,
                'nominee_name' => NULL,
                'relationship' => NULL,
                's_name' => NULL,
                'dob' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}