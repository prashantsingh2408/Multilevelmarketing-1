<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BankDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bank_details')->delete();
        
        \DB::table('bank_details')->insert(array (
            0 => 
            array (
                'id' => 1,
                'bank_name' => 'dsfsd',
                'account_number' => 'lkj',
                'branch_name' => 'jkljklj',
                'account_type' => 'lkj',
                'account_no' => 'lkj',
                'ifsc' => 'lkj',
                'created_at' => '2021-09-10 17:18:39',
                'updated_at' => '2021-09-10 17:29:58',
            ),
        ));
        
        
    }
}