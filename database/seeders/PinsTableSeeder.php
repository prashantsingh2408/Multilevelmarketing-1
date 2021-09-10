<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PinsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
         //Insert into pin using DB
        \DB::table('pins')->insert([
            'member_id' => 'GF100001',
            'pin' => '123454'
        ]);
        // \DB::table('pins')->delete();
        
        
        
    }
}