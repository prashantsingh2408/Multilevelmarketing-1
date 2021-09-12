<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PinRequestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pin_requests')->delete();
        
        
        
    }
}