<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KycsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kycs')->delete();
        
        \DB::table('kycs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'pan_number' => 'gfsfd',
                'pan_file' => 'Screenshot_20210910_180042.png',
                'adhar_file' => 'Screenshot_20210910_180042.png',
                'photo' => 'Screenshot_20210910_180042.png',
                'cheque_file' => 'Screenshot_20210910_180042.png',
                'remarks' => 'fdgsdf',
                'created_at' => '2021-09-10 17:56:26',
                'updated_at' => '2021-09-10 17:56:26',
            ),
        ));
        
        
    }
}