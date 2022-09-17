<?php

use Illuminate\Database\Seeder;

class PropertyAdditionalFeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('property_additional_features')->delete();
        
        \DB::table('property_additional_features')->insert(array (
            0 => 
            array (
                'id' => 1,
                'property_id' => 1,
                'name' => 'Heat',
                'value' => 'Natural Gas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'property_id' => 1,
                'name' => 'Roof',
                'value' => 'Composition/Shingle',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'property_id' => 1,
                'name' => 'Floors',
                'value' => 'Wall-to-Wall Carpet',
                'created_at' => '2019-11-12 20:08:27',
                'updated_at' => '2019-11-12 20:08:27',
            ),
            3 => 
            array (
                'id' => 5,
                'property_id' => 1,
                'name' => 'Water',
                'value' => 'District/Public',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'property_id' => 2,
                'name' => 'Cross Streets',
                'value' => 'Orangethorpe-Gilbert',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'property_id' => 2,
                'name' => 'Windows',
                'value' => 'Skylights',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'property_id' => 2,
                'name' => 'Childroom',
                'value' => '2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'property_id' => 3,
                'name' => 'Flat',
                'value' => '5',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'property_id' => 3,
                'name' => 'Heat',
                'value' => 'Electricity',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'property_id' => 4,
                'name' => 'Heat',
                'value' => 'Natural Gas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'property_id' => 4,
                'name' => 'Roof',
                'value' => 'Compostion/Shingle',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'property_id' => 4,
                'name' => 'Floors',
                'value' => 'Wall-to-Wall Carpet',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'property_id' => 5,
                'name' => 'Water',
                'value' => 'District/Public',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'property_id' => 5,
                'name' => 'Cross Streets',
                'value' => 'Orangethorpe-Gilbert',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'property_id' => 5,
                'name' => 'Windows',
                'value' => 'Skylights',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'property_id' => 5,
                'name' => 'Childroom',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'property_id' => 6,
                'name' => 'Flat',
                'value' => '3',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'property_id' => 6,
                'name' => 'Heat',
                'value' => 'Natural Gas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'property_id' => 6,
                'name' => 'Roof',
                'value' => 'Composition/Shingle',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'property_id' => 6,
                'name' => 'Floors',
                'value' => '2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'property_id' => 7,
                'name' => 'Water',
                'value' => 'District/Public',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 23,
                'property_id' => 7,
                'name' => 'Cross Streets',
                'value' => 'Orangethorpe-Gilbert',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 24,
                'property_id' => 8,
                'name' => 'Windows',
                'value' => 'Skylights',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 25,
                'property_id' => 8,
                'name' => 'Childroom',
                'value' => '3',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 26,
                'property_id' => 8,
                'name' => 'Flat',
                'value' => '2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 27,
                'property_id' => 9,
                'name' => 'Heat',
                'value' => 'Natural Gas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 28,
                'property_id' => 9,
                'name' => 'Roof',
                'value' => 'Composition/Shingle',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 29,
                'property_id' => 9,
                'name' => 'Floors',
                'value' => '3',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 30,
                'property_id' => 9,
                'name' => 'Water',
                'value' => 'District/Public',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 31,
                'property_id' => 10,
                'name' => 'Cross Streets',
                'value' => 'Orangethorpe-Gilbert',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 32,
                'property_id' => 10,
                'name' => 'Windows',
                'value' => 'Skylights',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 33,
                'property_id' => 10,
                'name' => 'Childroom',
                'value' => '2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 34,
                'property_id' => 11,
                'name' => 'Flat',
                'value' => '4',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 35,
                'property_id' => 11,
                'name' => 'Heat',
                'value' => 'Natural Gas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 36,
                'property_id' => 11,
                'name' => 'Roof',
                'value' => 'Composition/Shingle',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 37,
                'property_id' => 11,
                'name' => 'Floors',
                'value' => '3',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 38,
                'property_id' => 11,
                'name' => 'Water',
                'value' => 'District/Public',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 39,
                'property_id' => 11,
                'name' => 'Cross Streets',
                'value' => 'Orangethorpe-Gilbert',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 40,
                'property_id' => 11,
                'name' => 'Windows',
                'value' => 'Skylights',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 41,
                'property_id' => 12,
                'name' => 'Childroom',
                'value' => '3',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 42,
                'property_id' => 12,
                'name' => 'Flat',
                'value' => '2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 43,
                'property_id' => 12,
                'name' => 'Heat',
                'value' => 'Natural Gas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 44,
                'property_id' => 13,
                'name' => 'Roof',
                'value' => 'Composition/Shingle',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 45,
                'property_id' => 13,
                'name' => 'Floors',
                'value' => '2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 46,
                'property_id' => 13,
                'name' => 'Water',
                'value' => 'District/Public',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 47,
                'property_id' => 13,
                'name' => 'Cross Streets',
                'value' => 'Orangethorpe-Gilbert',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 48,
                'property_id' => 14,
                'name' => 'Windows',
                'value' => 'Skylights',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 49,
                'property_id' => 14,
                'name' => 'Childroom',
                'value' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 50,
                'property_id' => 14,
                'name' => 'Flat',
                'value' => '2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 51,
                'property_id' => 15,
                'name' => 'Heat',
                'value' => 'Natural Gas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 52,
                'property_id' => 15,
                'name' => 'Roof',
                'value' => 'Composition/Shingle',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 53,
                'property_id' => 15,
                'name' => 'Floors',
                'value' => '2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 54,
                'property_id' => 15,
                'name' => 'Water',
                'value' => 'District/Public',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 55,
                'property_id' => 15,
                'name' => 'Cross Streets',
                'value' => 'Orangethorpe-Gilbert',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}