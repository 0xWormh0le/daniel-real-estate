<?php

use Illuminate\Database\Seeder;

class PropertyStatusPivotTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('property_status_pivot')->delete();
        
        \DB::table('property_status_pivot')->insert(array (
            0 => 
            array (
                'id' => 1,
                'property_id' => 1,
                'property_status_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'property_id' => 1,
                'property_status_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'property_id' => 2,
                'property_status_id' => 6,
                'created_at' => '2019-11-12 20:11:42',
                'updated_at' => '2019-11-12 20:11:42',
            ),
            3 => 
            array (
                'id' => 4,
                'property_id' => 3,
                'property_status_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'property_id' => 4,
                'property_status_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'property_id' => 4,
                'property_status_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'property_id' => 5,
                'property_status_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'property_id' => 6,
                'property_status_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'property_id' => 7,
                'property_status_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'property_id' => 7,
                'property_status_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'property_id' => 8,
                'property_status_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'property_id' => 9,
                'property_status_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'property_id' => 10,
                'property_status_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'property_id' => 10,
                'property_status_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'property_id' => 11,
                'property_status_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'property_id' => 12,
                'property_status_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'property_id' => 12,
                'property_status_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'property_id' => 13,
                'property_status_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'property_id' => 14,
                'property_status_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'property_id' => 15,
                'property_status_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'property_id' => 15,
                'property_status_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}