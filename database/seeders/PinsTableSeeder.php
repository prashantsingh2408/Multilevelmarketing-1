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
        

        \DB::table('pins')->delete();
        
        \DB::table('pins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'member_id' => 'GF100001',
                'pin' => '123454',
                'member_name' => NULL,
                'pin_no' => NULL,
                'used_by' => NULL,
                'issue_date' => NULL,
                'product' => NULL,
                'transfer_id' => NULL,
                'transfer_date' => NULL,
                'transfer_name' => NULL,
                'report_type' => NULL,
                'approvel_status' => NULL,
                'from' => NULL,
                'to' => NULL,
                'total_record' => NULL,
                'mobile_no' => NULL,
                'date' => NULL,
                'reciept' => NULL,
                'amount' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}