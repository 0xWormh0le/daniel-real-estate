<?php

use Illuminate\Database\Seeder;

class PropertyFeaturePivotTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('property_feature_pivot')->delete();
        
        \DB::table('property_feature_pivot')->insert(array (
            0 => 
            array (
                'id' => 1,
                'property_id' => 1,
                'property_feature_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'property_id' => 1,
                'property_feature_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'property_id' => 1,
                'property_feature_id' => 9,
                'created_at' => '2019-11-12 20:07:50',
                'updated_at' => '2019-11-12 20:07:50',
            ),
            3 => 
            array (
                'id' => 6,
                'property_id' => 2,
                'property_feature_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'property_id' => 2,
                'property_feature_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'property_id' => 2,
                'property_feature_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'property_id' => 2,
                'property_feature_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'property_id' => 3,
                'property_feature_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 11,
                'property_id' => 3,
                'property_feature_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 12,
                'property_id' => 4,
                'property_feature_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 13,
                'property_id' => 4,
                'property_feature_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 14,
                'property_id' => 4,
                'property_feature_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 15,
                'property_id' => 4,
                'property_feature_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 16,
                'property_id' => 4,
                'property_feature_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 17,
                'property_id' => 5,
                'property_feature_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 18,
                'property_id' => 5,
                'property_feature_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 19,
                'property_id' => 6,
                'property_feature_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 20,
                'property_id' => 6,
                'property_feature_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 21,
                'property_id' => 6,
                'property_feature_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 22,
                'property_id' => 6,
                'property_feature_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 23,
                'property_id' => 7,
                'property_feature_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 24,
                'property_id' => 7,
                'property_feature_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 25,
                'property_id' => 8,
                'property_feature_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 26,
                'property_id' => 9,
                'property_feature_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 27,
                'property_id' => 9,
                'property_feature_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 28,
                'property_id' => 10,
                'property_feature_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 29,
                'property_id' => 10,
                'property_feature_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 30,
                'property_id' => 10,
                'property_feature_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 31,
                'property_id' => 10,
                'property_feature_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 32,
                'property_id' => 10,
                'property_feature_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 33,
                'property_id' => 11,
                'property_feature_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 34,
                'property_id' => 11,
                'property_feature_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 35,
                'property_id' => 12,
                'property_feature_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 36,
                'property_id' => 12,
                'property_feature_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 37,
                'property_id' => 12,
                'property_feature_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 38,
                'property_id' => 13,
                'property_feature_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 39,
                'property_id' => 14,
                'property_feature_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 40,
                'property_id' => 14,
                'property_feature_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 41,
                'property_id' => 14,
                'property_feature_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 42,
                'property_id' => 15,
                'property_feature_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 43,
                'property_id' => 15,
                'property_feature_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}