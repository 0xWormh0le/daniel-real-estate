<?php

use Illuminate\Database\Seeder;

class PropertyDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('property_details')->delete();
        
        \DB::table('property_details')->insert(array (
            0 => 
            array (
                'id' => 1,
                'property_id' => 1,
                'name' => 'city',
                'value' => 'Chester',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            1 => 
            array (
                'id' => 2,
                'property_id' => 1,
                'name' => 'zipcode',
                'value' => '551',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            2 => 
            array (
                'id' => 3,
                'property_id' => 1,
                'name' => 'neighborhood',
                'value' => 'vel eget mauris',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            3 => 
            array (
                'id' => 4,
                'property_id' => 1,
                'name' => 'street',
                'value' => 'E Venango St',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            4 => 
            array (
                'id' => 5,
                'property_id' => 1,
                'name' => 'lat',
                'value' => '41.326',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            5 => 
            array (
                'id' => 6,
                'property_id' => 1,
                'name' => 'lng',
                'value' => '77.8982',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            6 => 
            array (
                'id' => 7,
                'property_id' => 1,
                'name' => 'address',
                'value' => 'viverra faucibus ante',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            7 => 
            array (
                'id' => 8,
                'property_id' => 1,
                'name' => 'price_dollar_sale',
                'value' => '927376',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            8 => 
            array (
                'id' => 9,
                'property_id' => 1,
                'name' => 'price_dollar_rent',
                'value' => '7700',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            9 => 
            array (
                'id' => 10,
                'property_id' => 1,
                'name' => 'price_euro_sale',
                'value' => '772813',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            10 => 
            array (
                'id' => 11,
                'property_id' => 1,
                'name' => 'price_euro_rent',
                'value' => '6416',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            11 => 
            array (
                'id' => 12,
                'property_id' => 1,
                'name' => 'bedrooms',
                'value' => '5',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            12 => 
            array (
                'id' => 13,
                'property_id' => 1,
                'name' => 'bathrooms',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            13 => 
            array (
                'id' => 14,
                'property_id' => 1,
                'name' => 'garages',
                'value' => '1',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            14 => 
            array (
                'id' => 15,
                'property_id' => 1,
                'name' => 'area',
                'value' => '5227',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            15 => 
            array (
                'id' => 16,
                'property_id' => 1,
                'name' => 'year',
                'value' => '2003',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            16 => 
            array (
                'id' => 17,
                'property_id' => 1,
                'name' => 'ratings_count',
                'value' => '27',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            17 => 
            array (
                'id' => 18,
                'property_id' => 1,
                'name' => 'ratings_value',
                'value' => '1.77',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            18 => 
            array (
                'id' => 19,
                'property_id' => 1,
                'name' => 'published',
                'value' => '2016-5-19',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            19 => 
            array (
                'id' => 20,
                'property_id' => 1,
                'name' => 'views',
                'value' => '122',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            20 => 
            array (
                'id' => 21,
                'property_id' => 2,
                'name' => 'city',
                'value' => 'Clairton',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            21 => 
            array (
                'id' => 22,
                'property_id' => 2,
                'name' => 'zipcode',
                'value' => '576',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            22 => 
            array (
                'id' => 23,
                'property_id' => 2,
                'name' => 'neighborhood',
                'value' => 'Phasellus eros Maecenas',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            23 => 
            array (
                'id' => 24,
                'property_id' => 2,
                'name' => 'street',
                'value' => 'Eddington St',
                'created_at' => '2019-11-15 02:26:31',
                'updated_at' => '2019-11-15 02:26:31',
            ),
            24 => 
            array (
                'id' => 25,
                'property_id' => 2,
                'name' => 'lat',
                'value' => '41.4836',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            25 => 
            array (
                'id' => 26,
                'property_id' => 2,
                'name' => 'lng',
                'value' => '77.447',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            26 => 
            array (
                'id' => 27,
                'property_id' => 2,
                'name' => 'address',
                'value' => 'Lorem justo dictum',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            27 => 
            array (
                'id' => 28,
                'property_id' => 2,
                'name' => 'price_dollar_sale',
                'value' => '291125',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            28 => 
            array (
                'id' => 29,
                'property_id' => 2,
                'name' => 'price_dollar_rent',
                'value' => '2353',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            29 => 
            array (
                'id' => 30,
                'property_id' => 2,
                'name' => 'price_euro_sale',
                'value' => '242604',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            30 => 
            array (
                'id' => 31,
                'property_id' => 2,
                'name' => 'price_euro_rent',
                'value' => '1960',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            31 => 
            array (
                'id' => 32,
                'property_id' => 2,
                'name' => 'bedrooms',
                'value' => '4',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            32 => 
            array (
                'id' => 33,
                'property_id' => 2,
                'name' => 'bathrooms',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            33 => 
            array (
                'id' => 34,
                'property_id' => 2,
                'name' => 'garages',
                'value' => '1',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            34 => 
            array (
                'id' => 35,
                'property_id' => 2,
                'name' => 'area',
                'value' => '5617',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            35 => 
            array (
                'id' => 36,
                'property_id' => 2,
                'name' => 'year',
                'value' => '2016',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            36 => 
            array (
                'id' => 37,
                'property_id' => 2,
                'name' => 'ratings_count',
                'value' => '8',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            37 => 
            array (
                'id' => 38,
                'property_id' => 2,
                'name' => 'ratings_value',
                'value' => '1.76',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            38 => 
            array (
                'id' => 39,
                'property_id' => 2,
                'name' => 'published',
                'value' => '2012-1-9',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            39 => 
            array (
                'id' => 40,
                'property_id' => 2,
                'name' => 'views',
                'value' => '79',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            40 => 
            array (
                'id' => 41,
                'property_id' => 3,
                'name' => 'city',
                'value' => 'Corry',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            41 => 
            array (
                'id' => 42,
                'property_id' => 3,
                'name' => 'zipcode',
                'value' => '344',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            42 => 
            array (
                'id' => 43,
                'property_id' => 3,
                'name' => 'neighborhood',
                'value' => 'ut rhoncus quam',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            43 => 
            array (
                'id' => 44,
                'property_id' => 3,
                'name' => 'street',
                'value' => 'Erwin St',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            44 => 
            array (
                'id' => 45,
                'property_id' => 3,
                'name' => 'lat',
                'value' => '41.7451',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            45 => 
            array (
                'id' => 46,
                'property_id' => 3,
                'name' => 'lng',
                'value' => '77.4484',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            46 => 
            array (
                'id' => 47,
                'property_id' => 3,
                'name' => 'address',
                'value' => 'eget parturient velit',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            47 => 
            array (
                'id' => 48,
                'property_id' => 3,
                'name' => 'price_dollar_sale',
                'value' => '288985',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            48 => 
            array (
                'id' => 49,
                'property_id' => 3,
                'name' => 'price_dollar_rent',
                'value' => '3125',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            49 => 
            array (
                'id' => 50,
                'property_id' => 3,
                'name' => 'price_euro_sale',
                'value' => '240820',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            50 => 
            array (
                'id' => 51,
                'property_id' => 3,
                'name' => 'price_euro_rent',
                'value' => '2604',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            51 => 
            array (
                'id' => 52,
                'property_id' => 3,
                'name' => 'bedrooms',
                'value' => '3',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            52 => 
            array (
                'id' => 53,
                'property_id' => 3,
                'name' => 'bathrooms',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            53 => 
            array (
                'id' => 54,
                'property_id' => 3,
                'name' => 'garages',
                'value' => '1',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            54 => 
            array (
                'id' => 55,
                'property_id' => 3,
                'name' => 'area',
                'value' => '5619',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            55 => 
            array (
                'id' => 56,
                'property_id' => 3,
                'name' => 'year',
                'value' => '2008',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            56 => 
            array (
                'id' => 57,
                'property_id' => 3,
                'name' => 'ratings_count',
                'value' => '26',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            57 => 
            array (
                'id' => 58,
                'property_id' => 3,
                'name' => 'ratings_value',
                'value' => '2.82',
                'created_at' => '2019-11-15 02:26:32',
                'updated_at' => '2019-11-15 02:26:32',
            ),
            58 => 
            array (
                'id' => 59,
                'property_id' => 3,
                'name' => 'published',
                'value' => '2011-1-19',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            59 => 
            array (
                'id' => 60,
                'property_id' => 3,
                'name' => 'views',
                'value' => '104',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            60 => 
            array (
                'id' => 61,
                'property_id' => 4,
                'name' => 'city',
                'value' => 'Hazleton',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            61 => 
            array (
                'id' => 62,
                'property_id' => 4,
                'name' => 'zipcode',
                'value' => '903',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            62 => 
            array (
                'id' => 63,
                'property_id' => 4,
                'name' => 'neighborhood',
                'value' => 'dapibus elementum porttitor',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            63 => 
            array (
                'id' => 64,
                'property_id' => 4,
                'name' => 'street',
                'value' => 'Gerry St',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            64 => 
            array (
                'id' => 65,
                'property_id' => 4,
                'name' => 'lat',
                'value' => '41.1288',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            65 => 
            array (
                'id' => 66,
                'property_id' => 4,
                'name' => 'lng',
                'value' => '77.4368',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            66 => 
            array (
                'id' => 67,
                'property_id' => 4,
                'name' => 'address',
                'value' => 'et sit Aliquam',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            67 => 
            array (
                'id' => 68,
                'property_id' => 4,
                'name' => 'price_dollar_sale',
                'value' => '558743',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            68 => 
            array (
                'id' => 69,
                'property_id' => 4,
                'name' => 'price_dollar_rent',
                'value' => '18691',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            69 => 
            array (
                'id' => 70,
                'property_id' => 4,
                'name' => 'price_euro_sale',
                'value' => '465619',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            70 => 
            array (
                'id' => 71,
                'property_id' => 4,
                'name' => 'price_euro_rent',
                'value' => '15575',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            71 => 
            array (
                'id' => 72,
                'property_id' => 4,
                'name' => 'bedrooms',
                'value' => '5',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            72 => 
            array (
                'id' => 73,
                'property_id' => 4,
                'name' => 'bathrooms',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            73 => 
            array (
                'id' => 74,
                'property_id' => 4,
                'name' => 'garages',
                'value' => '1',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            74 => 
            array (
                'id' => 75,
                'property_id' => 4,
                'name' => 'area',
                'value' => '4482',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            75 => 
            array (
                'id' => 76,
                'property_id' => 4,
                'name' => 'year',
                'value' => '2000',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            76 => 
            array (
                'id' => 77,
                'property_id' => 4,
                'name' => 'ratings_count',
                'value' => '24',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            77 => 
            array (
                'id' => 78,
                'property_id' => 4,
                'name' => 'ratings_value',
                'value' => '4.85',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            78 => 
            array (
                'id' => 79,
                'property_id' => 4,
                'name' => 'published',
                'value' => '2016-8-5',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            79 => 
            array (
                'id' => 80,
                'property_id' => 4,
                'name' => 'views',
                'value' => '92',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            80 => 
            array (
                'id' => 81,
                'property_id' => 5,
                'name' => 'city',
                'value' => 'Johnstown',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            81 => 
            array (
                'id' => 82,
                'property_id' => 5,
                'name' => 'zipcode',
                'value' => '548',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            82 => 
            array (
                'id' => 83,
                'property_id' => 5,
                'name' => 'neighborhood',
                'value' => 'Nam pulvinar Donec',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            83 => 
            array (
                'id' => 84,
                'property_id' => 5,
                'name' => 'street',
                'value' => 'Harpers Pl',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            84 => 
            array (
                'id' => 85,
                'property_id' => 5,
                'name' => 'lat',
                'value' => '41.2299',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            85 => 
            array (
                'id' => 86,
                'property_id' => 5,
                'name' => 'lng',
                'value' => '77.5132',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            86 => 
            array (
                'id' => 87,
                'property_id' => 5,
                'name' => 'address',
                'value' => 'sapien Quisque leo',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            87 => 
            array (
                'id' => 88,
                'property_id' => 5,
                'name' => 'price_dollar_sale',
                'value' => '261924',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            88 => 
            array (
                'id' => 89,
                'property_id' => 5,
                'name' => 'price_dollar_rent',
                'value' => '2310',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            89 => 
            array (
                'id' => 90,
                'property_id' => 5,
                'name' => 'price_euro_sale',
                'value' => '218270',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            90 => 
            array (
                'id' => 91,
                'property_id' => 5,
                'name' => 'price_euro_rent',
                'value' => '1925',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            91 => 
            array (
                'id' => 92,
                'property_id' => 5,
                'name' => 'bedrooms',
                'value' => '3',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            92 => 
            array (
                'id' => 93,
                'property_id' => 5,
                'name' => 'bathrooms',
                'value' => '1',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            93 => 
            array (
                'id' => 94,
                'property_id' => 5,
                'name' => 'garages',
                'value' => '1',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            94 => 
            array (
                'id' => 95,
                'property_id' => 5,
                'name' => 'area',
                'value' => '4417',
                'created_at' => '2019-11-15 02:26:33',
                'updated_at' => '2019-11-15 02:26:33',
            ),
            95 => 
            array (
                'id' => 96,
                'property_id' => 5,
                'name' => 'year',
                'value' => '2004',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            96 => 
            array (
                'id' => 97,
                'property_id' => 5,
                'name' => 'ratings_count',
                'value' => '13',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            97 => 
            array (
                'id' => 98,
                'property_id' => 5,
                'name' => 'ratings_value',
                'value' => '1.32',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            98 => 
            array (
                'id' => 99,
                'property_id' => 5,
                'name' => 'published',
                'value' => '2011-6-1',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            99 => 
            array (
                'id' => 100,
                'property_id' => 5,
                'name' => 'views',
                'value' => '60',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            100 => 
            array (
                'id' => 101,
                'property_id' => 6,
                'name' => 'city',
                'value' => 'Latrobe',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            101 => 
            array (
                'id' => 102,
                'property_id' => 6,
                'name' => 'zipcode',
                'value' => '207',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            102 => 
            array (
                'id' => 103,
                'property_id' => 6,
                'name' => 'neighborhood',
                'value' => 'ut augue tempus',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            103 => 
            array (
                'id' => 104,
                'property_id' => 6,
                'name' => 'street',
                'value' => 'Inwood Ln',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            104 => 
            array (
                'id' => 105,
                'property_id' => 6,
                'name' => 'lat',
                'value' => '41.0048',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            105 => 
            array (
                'id' => 106,
                'property_id' => 6,
                'name' => 'lng',
                'value' => '77.4552',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            106 => 
            array (
                'id' => 107,
                'property_id' => 6,
                'name' => 'address',
                'value' => 'nec sit blandit',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            107 => 
            array (
                'id' => 108,
                'property_id' => 6,
                'name' => 'price_dollar_sale',
                'value' => '100914',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            108 => 
            array (
                'id' => 109,
                'property_id' => 6,
                'name' => 'price_dollar_rent',
                'value' => '11824',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            109 => 
            array (
                'id' => 110,
                'property_id' => 6,
                'name' => 'price_euro_sale',
                'value' => '84095',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            110 => 
            array (
                'id' => 111,
                'property_id' => 6,
                'name' => 'price_euro_rent',
                'value' => '9853',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            111 => 
            array (
                'id' => 112,
                'property_id' => 6,
                'name' => 'bedrooms',
                'value' => '3',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            112 => 
            array (
                'id' => 113,
                'property_id' => 6,
                'name' => 'bathrooms',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            113 => 
            array (
                'id' => 114,
                'property_id' => 6,
                'name' => 'garages',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            114 => 
            array (
                'id' => 115,
                'property_id' => 6,
                'name' => 'area',
                'value' => '5393',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            115 => 
            array (
                'id' => 116,
                'property_id' => 6,
                'name' => 'year',
                'value' => '2004',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            116 => 
            array (
                'id' => 117,
                'property_id' => 6,
                'name' => 'ratings_count',
                'value' => '11',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            117 => 
            array (
                'id' => 118,
                'property_id' => 6,
                'name' => 'ratings_value',
                'value' => '2.45',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            118 => 
            array (
                'id' => 119,
                'property_id' => 6,
                'name' => 'published',
                'value' => '2015-10-25',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            119 => 
            array (
                'id' => 120,
                'property_id' => 6,
                'name' => 'views',
                'value' => '116',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            120 => 
            array (
                'id' => 121,
                'property_id' => 7,
                'name' => 'city',
                'value' => 'Pittston',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            121 => 
            array (
                'id' => 122,
                'property_id' => 7,
                'name' => 'zipcode',
                'value' => '936',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            122 => 
            array (
                'id' => 123,
                'property_id' => 7,
                'name' => 'neighborhood',
                'value' => 'fringilla sociis velit',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            123 => 
            array (
                'id' => 124,
                'property_id' => 7,
                'name' => 'street',
                'value' => 'Kirkwood Rd',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            124 => 
            array (
                'id' => 125,
                'property_id' => 7,
                'name' => 'lat',
                'value' => '41.6554',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            125 => 
            array (
                'id' => 126,
                'property_id' => 7,
                'name' => 'lng',
                'value' => '77.0605',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            126 => 
            array (
                'id' => 127,
                'property_id' => 7,
                'name' => 'address',
                'value' => 'pretium eu hendrerit',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            127 => 
            array (
                'id' => 128,
                'property_id' => 7,
                'name' => 'price_dollar_sale',
                'value' => '230033',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            128 => 
            array (
                'id' => 129,
                'property_id' => 7,
                'name' => 'price_dollar_rent',
                'value' => '5266',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            129 => 
            array (
                'id' => 130,
                'property_id' => 7,
                'name' => 'price_euro_sale',
                'value' => '191694',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            130 => 
            array (
                'id' => 131,
                'property_id' => 7,
                'name' => 'price_euro_rent',
                'value' => '4388',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            131 => 
            array (
                'id' => 132,
                'property_id' => 7,
                'name' => 'bedrooms',
                'value' => '3',
                'created_at' => '2019-11-15 02:26:34',
                'updated_at' => '2019-11-15 02:26:34',
            ),
            132 => 
            array (
                'id' => 133,
                'property_id' => 7,
                'name' => 'bathrooms',
                'value' => '1',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            133 => 
            array (
                'id' => 134,
                'property_id' => 7,
                'name' => 'garages',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            134 => 
            array (
                'id' => 135,
                'property_id' => 7,
                'name' => 'area',
                'value' => '5540',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            135 => 
            array (
                'id' => 136,
                'property_id' => 7,
                'name' => 'year',
                'value' => '2010',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            136 => 
            array (
                'id' => 137,
                'property_id' => 7,
                'name' => 'ratings_count',
                'value' => '11',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            137 => 
            array (
                'id' => 138,
                'property_id' => 7,
                'name' => 'ratings_value',
                'value' => '2.76',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            138 => 
            array (
                'id' => 139,
                'property_id' => 7,
                'name' => 'published',
                'value' => '2015-11-20',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            139 => 
            array (
                'id' => 140,
                'property_id' => 7,
                'name' => 'views',
                'value' => '15',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            140 => 
            array (
                'id' => 141,
                'property_id' => 8,
                'name' => 'city',
                'value' => 'Sharon',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            141 => 
            array (
                'id' => 142,
                'property_id' => 8,
                'name' => 'zipcode',
                'value' => '382',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            142 => 
            array (
                'id' => 143,
                'property_id' => 8,
                'name' => 'neighborhood',
                'value' => 'ultricies vel eros',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            143 => 
            array (
                'id' => 144,
                'property_id' => 8,
                'name' => 'street',
                'value' => 'Linmore Ave',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            144 => 
            array (
                'id' => 145,
                'property_id' => 8,
                'name' => 'lat',
                'value' => '41.5521',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            145 => 
            array (
                'id' => 146,
                'property_id' => 8,
                'name' => 'lng',
                'value' => '77.4826',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            146 => 
            array (
                'id' => 147,
                'property_id' => 8,
                'name' => 'address',
                'value' => 'ipsum dictum justo',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            147 => 
            array (
                'id' => 148,
                'property_id' => 8,
                'name' => 'price_dollar_sale',
                'value' => '573664',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            148 => 
            array (
                'id' => 149,
                'property_id' => 8,
                'name' => 'price_dollar_rent',
                'value' => '4577',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            149 => 
            array (
                'id' => 150,
                'property_id' => 8,
                'name' => 'price_euro_sale',
                'value' => '478053',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            150 => 
            array (
                'id' => 151,
                'property_id' => 8,
                'name' => 'price_euro_rent',
                'value' => '3814',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            151 => 
            array (
                'id' => 152,
                'property_id' => 8,
                'name' => 'bedrooms',
                'value' => '3',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            152 => 
            array (
                'id' => 153,
                'property_id' => 8,
                'name' => 'bathrooms',
                'value' => '1',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            153 => 
            array (
                'id' => 154,
                'property_id' => 8,
                'name' => 'garages',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            154 => 
            array (
                'id' => 155,
                'property_id' => 8,
                'name' => 'area',
                'value' => '4680',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            155 => 
            array (
                'id' => 156,
                'property_id' => 8,
                'name' => 'year',
                'value' => '2007',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            156 => 
            array (
                'id' => 157,
                'property_id' => 8,
                'name' => 'ratings_count',
                'value' => '6',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            157 => 
            array (
                'id' => 158,
                'property_id' => 8,
                'name' => 'ratings_value',
                'value' => '0.3',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            158 => 
            array (
                'id' => 159,
                'property_id' => 8,
                'name' => 'published',
                'value' => '2016-11-27',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            159 => 
            array (
                'id' => 160,
                'property_id' => 8,
                'name' => 'views',
                'value' => '16',
                'created_at' => '2019-11-15 02:26:35',
                'updated_at' => '2019-11-15 02:26:35',
            ),
            160 => 
            array (
                'id' => 161,
                'property_id' => 9,
                'name' => 'city',
                'value' => 'Washington',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            161 => 
            array (
                'id' => 162,
                'property_id' => 9,
                'name' => 'zipcode',
                'value' => '463',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            162 => 
            array (
                'id' => 163,
                'property_id' => 9,
                'name' => 'neighborhood',
                'value' => 'eget fringilla ante',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            163 => 
            array (
                'id' => 164,
                'property_id' => 9,
                'name' => 'street',
                'value' => 'Marigold Ln',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            164 => 
            array (
                'id' => 165,
                'property_id' => 9,
                'name' => 'lat',
                'value' => '41.116',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            165 => 
            array (
                'id' => 166,
                'property_id' => 9,
                'name' => 'lng',
                'value' => '77.7837',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            166 => 
            array (
                'id' => 167,
                'property_id' => 9,
                'name' => 'address',
                'value' => 'ut augue vel',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            167 => 
            array (
                'id' => 168,
                'property_id' => 9,
                'name' => 'price_dollar_sale',
                'value' => '776670',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            168 => 
            array (
                'id' => 169,
                'property_id' => 9,
                'name' => 'price_dollar_rent',
                'value' => '30243',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            169 => 
            array (
                'id' => 170,
                'property_id' => 9,
                'name' => 'price_euro_sale',
                'value' => '647225',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            170 => 
            array (
                'id' => 171,
                'property_id' => 9,
                'name' => 'price_euro_rent',
                'value' => '25202',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            171 => 
            array (
                'id' => 172,
                'property_id' => 9,
                'name' => 'bedrooms',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            172 => 
            array (
                'id' => 173,
                'property_id' => 9,
                'name' => 'bathrooms',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            173 => 
            array (
                'id' => 174,
                'property_id' => 9,
                'name' => 'garages',
                'value' => '1',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            174 => 
            array (
                'id' => 175,
                'property_id' => 9,
                'name' => 'area',
                'value' => '3860',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            175 => 
            array (
                'id' => 176,
                'property_id' => 9,
                'name' => 'year',
                'value' => '2007',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            176 => 
            array (
                'id' => 177,
                'property_id' => 9,
                'name' => 'ratings_count',
                'value' => '17',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            177 => 
            array (
                'id' => 178,
                'property_id' => 9,
                'name' => 'ratings_value',
                'value' => '3.02',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            178 => 
            array (
                'id' => 179,
                'property_id' => 9,
                'name' => 'published',
                'value' => '2015-4-7',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            179 => 
            array (
                'id' => 180,
                'property_id' => 9,
                'name' => 'views',
                'value' => '7',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            180 => 
            array (
                'id' => 181,
                'property_id' => 10,
                'name' => 'city',
                'value' => 'Warren',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            181 => 
            array (
                'id' => 182,
                'property_id' => 10,
                'name' => 'zipcode',
                'value' => '805',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            182 => 
            array (
                'id' => 183,
                'property_id' => 10,
                'name' => 'neighborhood',
                'value' => 'Cras tellus Nam',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            183 => 
            array (
                'id' => 184,
                'property_id' => 10,
                'name' => 'street',
                'value' => 'Morning Glory Rd',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            184 => 
            array (
                'id' => 185,
                'property_id' => 10,
                'name' => 'lat',
                'value' => '41.5234',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            185 => 
            array (
                'id' => 186,
                'property_id' => 10,
                'name' => 'lng',
                'value' => '77.4472',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            186 => 
            array (
                'id' => 187,
                'property_id' => 10,
                'name' => 'address',
                'value' => 'leo ipsum justo',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            187 => 
            array (
                'id' => 188,
                'property_id' => 10,
                'name' => 'price_dollar_sale',
                'value' => '657313',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            188 => 
            array (
                'id' => 189,
                'property_id' => 10,
                'name' => 'price_dollar_rent',
                'value' => '6310',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            189 => 
            array (
                'id' => 190,
                'property_id' => 10,
                'name' => 'price_euro_sale',
                'value' => '547760',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            190 => 
            array (
                'id' => 191,
                'property_id' => 10,
                'name' => 'price_euro_rent',
                'value' => '5258',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            191 => 
            array (
                'id' => 192,
                'property_id' => 10,
                'name' => 'bedrooms',
                'value' => '5',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            192 => 
            array (
                'id' => 193,
                'property_id' => 10,
                'name' => 'bathrooms',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            193 => 
            array (
                'id' => 194,
                'property_id' => 10,
                'name' => 'garages',
                'value' => '1',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            194 => 
            array (
                'id' => 195,
                'property_id' => 10,
                'name' => 'area',
                'value' => '3842',
                'created_at' => '2019-11-15 02:26:36',
                'updated_at' => '2019-11-15 02:26:36',
            ),
            195 => 
            array (
                'id' => 196,
                'property_id' => 10,
                'name' => 'year',
                'value' => '2014',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            196 => 
            array (
                'id' => 197,
                'property_id' => 10,
                'name' => 'ratings_count',
                'value' => '16',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            197 => 
            array (
                'id' => 198,
                'property_id' => 10,
                'name' => 'ratings_value',
                'value' => '2.48',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            198 => 
            array (
                'id' => 199,
                'property_id' => 10,
                'name' => 'published',
                'value' => '2013-11-17',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            199 => 
            array (
                'id' => 200,
                'property_id' => 10,
                'name' => 'views',
                'value' => '57',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            200 => 
            array (
                'id' => 201,
                'property_id' => 11,
                'name' => 'city',
                'value' => 'Parker',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            201 => 
            array (
                'id' => 202,
                'property_id' => 11,
                'name' => 'zipcode',
                'value' => '194',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            202 => 
            array (
                'id' => 203,
                'property_id' => 11,
                'name' => 'neighborhood',
                'value' => 'velit dui fringilla',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            203 => 
            array (
                'id' => 204,
                'property_id' => 11,
                'name' => 'street',
                'value' => 'N Convent Ln',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            204 => 
            array (
                'id' => 205,
                'property_id' => 11,
                'name' => 'lat',
                'value' => '41.3222',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            205 => 
            array (
                'id' => 206,
                'property_id' => 11,
                'name' => 'lng',
                'value' => '77.3871',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            206 => 
            array (
                'id' => 207,
                'property_id' => 11,
                'name' => 'address',
                'value' => 'felis tincidunt eleifend',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            207 => 
            array (
                'id' => 208,
                'property_id' => 11,
                'name' => 'price_dollar_sale',
                'value' => '903963',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            208 => 
            array (
                'id' => 209,
                'property_id' => 11,
                'name' => 'price_dollar_rent',
                'value' => '9755',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            209 => 
            array (
                'id' => 210,
                'property_id' => 11,
                'name' => 'price_euro_sale',
                'value' => '753302',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            210 => 
            array (
                'id' => 211,
                'property_id' => 11,
                'name' => 'price_euro_rent',
                'value' => '8129',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            211 => 
            array (
                'id' => 212,
                'property_id' => 11,
                'name' => 'bedrooms',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            212 => 
            array (
                'id' => 213,
                'property_id' => 11,
                'name' => 'bathrooms',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            213 => 
            array (
                'id' => 214,
                'property_id' => 11,
                'name' => 'garages',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            214 => 
            array (
                'id' => 215,
                'property_id' => 11,
                'name' => 'area',
                'value' => '2364',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            215 => 
            array (
                'id' => 216,
                'property_id' => 11,
                'name' => 'year',
                'value' => '2007',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            216 => 
            array (
                'id' => 217,
                'property_id' => 11,
                'name' => 'ratings_count',
                'value' => '10',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            217 => 
            array (
                'id' => 218,
                'property_id' => 11,
                'name' => 'ratings_value',
                'value' => '0.29',
                'created_at' => '2019-11-15 02:26:37',
                'updated_at' => '2019-11-15 02:26:37',
            ),
            218 => 
            array (
                'id' => 219,
                'property_id' => 11,
                'name' => 'published',
                'value' => '2011-1-3',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            219 => 
            array (
                'id' => 220,
                'property_id' => 11,
                'name' => 'views',
                'value' => '30',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            220 => 
            array (
                'id' => 221,
                'property_id' => 12,
                'name' => 'city',
                'value' => 'Chester',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            221 => 
            array (
                'id' => 222,
                'property_id' => 12,
                'name' => 'zipcode',
                'value' => '301',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            222 => 
            array (
                'id' => 223,
                'property_id' => 12,
                'name' => 'neighborhood',
                'value' => 'libero vulputate a',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            223 => 
            array (
                'id' => 224,
                'property_id' => 12,
                'name' => 'street',
                'value' => 'Napfle St',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            224 => 
            array (
                'id' => 225,
                'property_id' => 12,
                'name' => 'lat',
                'value' => '41.0083',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            225 => 
            array (
                'id' => 226,
                'property_id' => 12,
                'name' => 'lng',
                'value' => '77.7044',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            226 => 
            array (
                'id' => 227,
                'property_id' => 12,
                'name' => 'address',
                'value' => 'leo tincidunt feugiat',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            227 => 
            array (
                'id' => 228,
                'property_id' => 12,
                'name' => 'price_dollar_sale',
                'value' => '993669',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            228 => 
            array (
                'id' => 229,
                'property_id' => 12,
                'name' => 'price_dollar_rent',
                'value' => '11013',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            229 => 
            array (
                'id' => 230,
                'property_id' => 12,
                'name' => 'price_euro_sale',
                'value' => '828057',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            230 => 
            array (
                'id' => 231,
                'property_id' => 12,
                'name' => 'price_euro_rent',
                'value' => '9177',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            231 => 
            array (
                'id' => 232,
                'property_id' => 12,
                'name' => 'bedrooms',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            232 => 
            array (
                'id' => 233,
                'property_id' => 12,
                'name' => 'bathrooms',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            233 => 
            array (
                'id' => 234,
                'property_id' => 12,
                'name' => 'garages',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            234 => 
            array (
                'id' => 235,
                'property_id' => 12,
                'name' => 'area',
                'value' => '2902',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            235 => 
            array (
                'id' => 236,
                'property_id' => 12,
                'name' => 'year',
                'value' => '2007',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            236 => 
            array (
                'id' => 237,
                'property_id' => 12,
                'name' => 'ratings_count',
                'value' => '20',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            237 => 
            array (
                'id' => 238,
                'property_id' => 12,
                'name' => 'ratings_value',
                'value' => '3',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            238 => 
            array (
                'id' => 239,
                'property_id' => 12,
                'name' => 'published',
                'value' => '2015-9-1',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            239 => 
            array (
                'id' => 240,
                'property_id' => 12,
                'name' => 'views',
                'value' => '0',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            240 => 
            array (
                'id' => 241,
                'property_id' => 13,
                'name' => 'city',
                'value' => 'Clairton',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            241 => 
            array (
                'id' => 242,
                'property_id' => 13,
                'name' => 'zipcode',
                'value' => '789',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            242 => 
            array (
                'id' => 243,
                'property_id' => 13,
                'name' => 'neighborhood',
                'value' => 'velit dictum eget',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            243 => 
            array (
                'id' => 244,
                'property_id' => 13,
                'name' => 'street',
                'value' => 'Oak Lane Rd',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            244 => 
            array (
                'id' => 245,
                'property_id' => 13,
                'name' => 'lat',
                'value' => '41.2605',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            245 => 
            array (
                'id' => 246,
                'property_id' => 13,
                'name' => 'lng',
                'value' => '77.1827',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            246 => 
            array (
                'id' => 247,
                'property_id' => 13,
                'name' => 'address',
                'value' => 'mauris viverra nisi',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            247 => 
            array (
                'id' => 248,
                'property_id' => 13,
                'name' => 'price_dollar_sale',
                'value' => '334727',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            248 => 
            array (
                'id' => 249,
                'property_id' => 13,
                'name' => 'price_dollar_rent',
                'value' => '138123',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            249 => 
            array (
                'id' => 250,
                'property_id' => 13,
                'name' => 'price_euro_sale',
                'value' => '278939',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            250 => 
            array (
                'id' => 251,
                'property_id' => 13,
                'name' => 'price_euro_rent',
                'value' => '115102',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            251 => 
            array (
                'id' => 252,
                'property_id' => 13,
                'name' => 'bedrooms',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:38',
                'updated_at' => '2019-11-15 02:26:38',
            ),
            252 => 
            array (
                'id' => 253,
                'property_id' => 13,
                'name' => 'bathrooms',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            253 => 
            array (
                'id' => 254,
                'property_id' => 13,
                'name' => 'garages',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            254 => 
            array (
                'id' => 255,
                'property_id' => 13,
                'name' => 'area',
                'value' => '4695',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            255 => 
            array (
                'id' => 256,
                'property_id' => 13,
                'name' => 'year',
                'value' => '2000',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            256 => 
            array (
                'id' => 257,
                'property_id' => 13,
                'name' => 'ratings_count',
                'value' => '25',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            257 => 
            array (
                'id' => 258,
                'property_id' => 13,
                'name' => 'ratings_value',
                'value' => '3.11',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            258 => 
            array (
                'id' => 259,
                'property_id' => 13,
                'name' => 'published',
                'value' => '2012-7-17',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            259 => 
            array (
                'id' => 260,
                'property_id' => 13,
                'name' => 'views',
                'value' => '96',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            260 => 
            array (
                'id' => 261,
                'property_id' => 14,
                'name' => 'city',
                'value' => 'Corry',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            261 => 
            array (
                'id' => 262,
                'property_id' => 14,
                'name' => 'zipcode',
                'value' => '872',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            262 => 
            array (
                'id' => 263,
                'property_id' => 14,
                'name' => 'neighborhood',
                'value' => 'tempus In Etiam',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            263 => 
            array (
                'id' => 264,
                'property_id' => 14,
                'name' => 'street',
                'value' => 'E Venango St',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            264 => 
            array (
                'id' => 265,
                'property_id' => 14,
                'name' => 'lat',
                'value' => '41.7689',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            265 => 
            array (
                'id' => 266,
                'property_id' => 14,
                'name' => 'lng',
                'value' => '77.5856',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            266 => 
            array (
                'id' => 267,
                'property_id' => 14,
                'name' => 'address',
                'value' => 'Aenean commodo amet',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            267 => 
            array (
                'id' => 268,
                'property_id' => 14,
                'name' => 'price_dollar_sale',
                'value' => '714590',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            268 => 
            array (
                'id' => 269,
                'property_id' => 14,
                'name' => 'price_dollar_rent',
                'value' => '5222',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            269 => 
            array (
                'id' => 270,
                'property_id' => 14,
                'name' => 'price_euro_sale',
                'value' => '595491',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            270 => 
            array (
                'id' => 271,
                'property_id' => 14,
                'name' => 'price_euro_rent',
                'value' => '4351',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            271 => 
            array (
                'id' => 272,
                'property_id' => 14,
                'name' => 'bedrooms',
                'value' => '3',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            272 => 
            array (
                'id' => 273,
                'property_id' => 14,
                'name' => 'bathrooms',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            273 => 
            array (
                'id' => 274,
                'property_id' => 14,
                'name' => 'garages',
                'value' => '1',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            274 => 
            array (
                'id' => 275,
                'property_id' => 14,
                'name' => 'area',
                'value' => '3756',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            275 => 
            array (
                'id' => 276,
                'property_id' => 14,
                'name' => 'year',
                'value' => '2011',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            276 => 
            array (
                'id' => 277,
                'property_id' => 14,
                'name' => 'ratings_count',
                'value' => '12',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            277 => 
            array (
                'id' => 278,
                'property_id' => 14,
                'name' => 'ratings_value',
                'value' => '3.98',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            278 => 
            array (
                'id' => 279,
                'property_id' => 14,
                'name' => 'published',
                'value' => '2012-10-3',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            279 => 
            array (
                'id' => 280,
                'property_id' => 14,
                'name' => 'views',
                'value' => '101',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            280 => 
            array (
                'id' => 281,
                'property_id' => 15,
                'name' => 'city',
                'value' => 'Hazleton',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            281 => 
            array (
                'id' => 282,
                'property_id' => 15,
                'name' => 'zipcode',
                'value' => '485',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            282 => 
            array (
                'id' => 283,
                'property_id' => 15,
                'name' => 'neighborhood',
                'value' => 'pulvinar hendrerit nec',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            283 => 
            array (
                'id' => 284,
                'property_id' => 15,
                'name' => 'street',
                'value' => 'Eddington St',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            284 => 
            array (
                'id' => 285,
                'property_id' => 15,
                'name' => 'lat',
                'value' => '41.7825',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            285 => 
            array (
                'id' => 286,
                'property_id' => 15,
                'name' => 'lng',
                'value' => '77.1704',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            286 => 
            array (
                'id' => 287,
                'property_id' => 15,
                'name' => 'address',
                'value' => 'viverra fringilla Quisque',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            287 => 
            array (
                'id' => 288,
                'property_id' => 15,
                'name' => 'price_dollar_sale',
                'value' => '1074196',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            288 => 
            array (
                'id' => 289,
                'property_id' => 15,
                'name' => 'price_dollar_rent',
                'value' => '610655',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            289 => 
            array (
                'id' => 290,
                'property_id' => 15,
                'name' => 'price_euro_sale',
                'value' => '895163',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            290 => 
            array (
                'id' => 291,
                'property_id' => 15,
                'name' => 'price_euro_rent',
                'value' => '508879',
                'created_at' => '2019-11-15 02:26:39',
                'updated_at' => '2019-11-15 02:26:39',
            ),
            291 => 
            array (
                'id' => 292,
                'property_id' => 15,
                'name' => 'bedrooms',
                'value' => '5',
                'created_at' => '2019-11-15 02:26:40',
                'updated_at' => '2019-11-15 02:26:40',
            ),
            292 => 
            array (
                'id' => 293,
                'property_id' => 15,
                'name' => 'bathrooms',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:40',
                'updated_at' => '2019-11-15 02:26:40',
            ),
            293 => 
            array (
                'id' => 294,
                'property_id' => 15,
                'name' => 'garages',
                'value' => '2',
                'created_at' => '2019-11-15 02:26:40',
                'updated_at' => '2019-11-15 02:26:40',
            ),
            294 => 
            array (
                'id' => 295,
                'property_id' => 15,
                'name' => 'area',
                'value' => '4171',
                'created_at' => '2019-11-15 02:26:40',
                'updated_at' => '2019-11-15 02:26:40',
            ),
            295 => 
            array (
                'id' => 296,
                'property_id' => 15,
                'name' => 'year',
                'value' => '2008',
                'created_at' => '2019-11-15 02:26:40',
                'updated_at' => '2019-11-15 02:26:40',
            ),
            296 => 
            array (
                'id' => 297,
                'property_id' => 15,
                'name' => 'ratings_count',
                'value' => '22',
                'created_at' => '2019-11-15 02:26:40',
                'updated_at' => '2019-11-15 02:26:40',
            ),
            297 => 
            array (
                'id' => 298,
                'property_id' => 15,
                'name' => 'ratings_value',
                'value' => '0.84',
                'created_at' => '2019-11-15 02:26:40',
                'updated_at' => '2019-11-15 02:26:40',
            ),
            298 => 
            array (
                'id' => 299,
                'property_id' => 15,
                'name' => 'published',
                'value' => '2012-12-14',
                'created_at' => '2019-11-15 02:26:40',
                'updated_at' => '2019-11-15 02:26:40',
            ),
            299 => 
            array (
                'id' => 300,
                'property_id' => 15,
                'name' => 'views',
                'value' => '41',
                'created_at' => '2019-11-15 02:26:40',
                'updated_at' => '2019-11-15 02:26:40',
            ),
            300 => 
            array (
                'id' => 301,
                'property_id' => 25,
                'name' => 'city',
                'value' => 'boston',
                'created_at' => '2019-12-18 18:20:41',
                'updated_at' => '2019-12-18 18:20:41',
            ),
            301 => 
            array (
                'id' => 302,
                'property_id' => 25,
                'name' => 'zipcode',
                'value' => '123',
                'created_at' => '2019-12-18 18:20:41',
                'updated_at' => '2019-12-18 18:20:41',
            ),
        ));
        
        
    }
}