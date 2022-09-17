<?php

use Illuminate\Database\Seeder;

class PropertyPlansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('property_plans')->delete();
        
        \DB::table('property_plans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'property_id' => 1,
                'name' => 'First floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1180,
                'rooms' => 3,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'property_id' => 1,
                'name' => 'Second Floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1200,
                'rooms' => 5,
                'baths' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'property_id' => 2,
                'name' => 'First floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1342,
                'rooms' => 4,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'property_id' => 2,
                'name' => 'Second Floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 2513,
                'rooms' => 3,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'property_id' => 3,
                'name' => 'First floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 2321,
                'rooms' => 4,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'property_id' => 3,
                'name' => 'Second Floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 3146,
                'rooms' => 6,
                'baths' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'property_id' => 4,
                'name' => 'First floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1422,
                'rooms' => 5,
                'baths' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'property_id' => 4,
                'name' => 'Second Floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1352,
                'rooms' => 3,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'property_id' => 5,
                'name' => 'First floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 2653,
                'rooms' => 4,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'property_id' => 5,
                'name' => 'Second Floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1241,
                'rooms' => 6,
                'baths' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'property_id' => 6,
                'name' => 'First floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1864,
                'rooms' => 5,
                'baths' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'property_id' => 6,
                'name' => 'Second Floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1853,
                'rooms' => 4,
                'baths' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'property_id' => 7,
                'name' => 'First floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1643,
                'rooms' => 3,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'property_id' => 7,
                'name' => 'Second Floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1753,
                'rooms' => 4,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'property_id' => 8,
                'name' => 'First floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1856,
                'rooms' => 5,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'property_id' => 8,
                'name' => 'Second Floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1367,
                'rooms' => 4,
                'baths' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'property_id' => 9,
                'name' => 'First floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 2639,
                'rooms' => 4,
                'baths' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'property_id' => 9,
                'name' => 'Second Floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 2853,
                'rooms' => 5,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'property_id' => 10,
                'name' => 'First floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 2658,
                'rooms' => 6,
                'baths' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'property_id' => 10,
                'name' => 'Second Floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 2534,
                'rooms' => 6,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'property_id' => 11,
                'name' => 'First floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1464,
                'rooms' => 5,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'property_id' => 11,
                'name' => 'Second Floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 2643,
                'rooms' => 3,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'property_id' => 12,
                'name' => 'First floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 2574,
                'rooms' => 5,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'property_id' => 12,
                'name' => 'Second Floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 2126,
                'rooms' => 3,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'property_id' => 13,
                'name' => 'First floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1362,
                'rooms' => 4,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'property_id' => 13,
                'name' => 'Second Floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1373,
                'rooms' => 5,
                'baths' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'property_id' => 14,
                'name' => 'First floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1325,
                'rooms' => 6,
                'baths' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'property_id' => 14,
                'name' => 'Second Floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1586,
                'rooms' => 6,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'property_id' => 15,
                'name' => 'First floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 1964,
                'rooms' => 3,
                'baths' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'property_id' => 15,
                'name' => 'Second Floor',
                'description' => 'Plan description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam veniam sit reprehenderit deserunt ad voluptates id aperiam veritatis! Nobis saepe quos eveniet numquam vitae quis, tenetur consectetur impedit dolore.',
                'area' => 2064,
                'rooms' => 4,
                'baths' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}