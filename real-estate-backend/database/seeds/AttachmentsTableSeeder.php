<?php

use Illuminate\Database\Seeder;

class AttachmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attachments')->delete();
        
        \DB::table('attachments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'small' => 'uploads/properties/small/plan-1.jpg',
                'medium' => 'uploads/properties/medium/plan-1.jpg',
                'big' => 'uploads/properties/big/plan-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'small' => 'uploads/properties/small/plan-2.jpg',
                'medium' => 'uploads/properties/medium/plan-2.jpg',
                'big' => 'uploads/properties/big/plan-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'small' => 'uploads/properties/video/video-1.mp4',
                'medium' => NULL,
                'big' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'small' => 'uploads/properties/small/apartment-1.jpg',
                'medium' => 'uploads/properties/medium/apartment-1.jpg',
                'big' => 'uploads/properties/big/apartment-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'small' => 'uploads/properties/small/apartment-2.jpg',
                'medium' => 'uploads/properties/medium/apartment-2.jpg',
                'big' => 'uploads/properties/big/apartment-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'small' => 'uploads/properties/small/apartment-3.jpg',
                'medium' => 'uploads/properties/medium/apartment-3.jpg',
                'big' => 'uploads/properties/big/apartment-3.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'small' => 'uploads/properties/small/apartment-4.jpg',
                'medium' => 'uploads/properties/medium/apartment-4.jpg',
                'big' => 'uploads/properties/big/apartment-4.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'small' => 'uploads/properties/small/apartment-5.jpg',
                'medium' => 'uploads/properties/medium/apartment-5.jpg',
                'big' => 'uploads/properties/big/apartment-5.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'small' => 'uploads/properties/small/plan-1.jpg',
                'medium' => 'uploads/properties/medium/plan-1.jpg',
                'big' => 'uploads/properties/big/plan-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'small' => 'uploads/properties/small/plan-2.jpg',
                'medium' => 'uploads/properties/medium/plan-2.jpg',
                'big' => 'uploads/properties/big/plan-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'small' => 'uploads/properties/video/video-1.mp4',
                'medium' => NULL,
                'big' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'small' => 'uploads/properties/small/flat1-1.jpg',
                'medium' => 'uploads/properties/medium/flat1-1.jpg',
                'big' => 'uploads/properties/big/flat1-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'small' => 'uploads/properties/small/flat1-2.jpg',
                'medium' => 'uploads/properties/medium/flat1-2.jpg',
                'big' => 'uploads/properties/big/flat1-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'small' => 'uploads/properties/small/flat1-3.jpg',
                'medium' => 'uploads/properties/medium/flat1-3.jpg',
                'big' => 'uploads/properties/big/flat1-3.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'small' => 'uploads/properties/small/flat1-4.jpg',
                'medium' => 'uploads/properties/medium/flat1-4.jpg',
                'big' => 'uploads/properties/big/flat1-4.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'small' => 'uploads/properties/small/plan-1.jpg',
                'medium' => 'uploads/properties/medium/plan-1.jpg',
                'big' => 'uploads/properties/big/plan-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'small' => 'uploads/properties/small/plan-2.jpg',
                'medium' => 'uploads/properties/medium/plan-2.jpg',
                'big' => 'uploads/properties/big/plan-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'small' => 'uploads/properties/video/video-1.mp4',
                'medium' => NULL,
                'big' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'small' => 'uploads/properties/small/flat2-1.jpg',
                'medium' => 'uploads/properties/medium/flat2-1.jpg',
                'big' => 'uploads/properties/big/flat2-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'small' => 'uploads/properties/small/flat2-2.jpg',
                'medium' => 'uploads/properties/medium/flat2-2.jpg',
                'big' => 'uploads/properties/big/flat2-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'small' => 'uploads/properties/small/flat2-3.jpg',
                'medium' => 'uploads/properties/medium/flat2-3.jpg',
                'big' => 'uploads/properties/big/flat2-3.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'small' => 'uploads/properties/small/flat2-4.jpg',
                'medium' => 'uploads/properties/medium/flat2-4.jpg',
                'big' => 'uploads/properties/big/flat2-4.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'small' => 'uploads/properties/small/flat2-5.jpg',
                'medium' => 'uploads/properties/medium/flat2-5.jpg',
                'big' => 'uploads/properties/big/flat2-5.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'small' => 'uploads/properties/small/plan-1.jpg',
                'medium' => 'uploads/properties/medium/plan-1.jpg',
                'big' => 'uploads/properties/big/plan-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'small' => 'uploads/properties/small/plan-2.jpg',
                'medium' => 'uploads/properties/medium/plan-2.jpg',
                'big' => 'uploads/properties/big/plan-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'small' => 'uploads/properties/video/video-1.mp4',
                'medium' => NULL,
                'big' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'small' => 'uploads/properties/small/house1-1.jpg',
                'medium' => 'uploads/properties/medium/house1-1.jpg',
                'big' => 'uploads/properties/big/house1-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'small' => 'uploads/properties/small/house1-2.jpg',
                'medium' => 'uploads/properties/medium/house1-2.jpg',
                'big' => 'uploads/properties/big/house1-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'small' => 'uploads/properties/small/house1-3.jpg',
                'medium' => 'uploads/properties/medium/house1-3.jpg',
                'big' => 'uploads/properties/big/house1-3.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'small' => 'uploads/properties/small/house1-4.jpg',
                'medium' => 'uploads/properties/medium/house1-4.jpg',
                'big' => 'uploads/properties/big/house1-4.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'small' => 'uploads/properties/small/house1-5.jpg',
                'medium' => 'uploads/properties/medium/house1-5.jpg',
                'big' => 'uploads/properties/big/house1-5.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'small' => 'uploads/properties/small/house1-6.jpg',
                'medium' => 'uploads/properties/medium/house1-6.jpg',
                'big' => 'uploads/properties/big/house1-6.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'small' => 'uploads/properties/small/plan-1.jpg',
                'medium' => 'uploads/properties/medium/plan-1.jpg',
                'big' => 'uploads/properties/big/plan-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'small' => 'uploads/properties/small/plan-2.jpg',
                'medium' => 'uploads/properties/medium/plan-2.jpg',
                'big' => 'uploads/properties/big/plan-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'small' => 'uploads/properties/video/video-1.mp4',
                'medium' => NULL,
                'big' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'small' => 'uploads/properties/small/house2-1.jpg',
                'medium' => 'uploads/properties/medium/house2-1.jpg',
                'big' => 'uploads/properties/big/house2-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'small' => 'uploads/properties/small/house2-2.jpg',
                'medium' => 'uploads/properties/medium/house2-2.jpg',
                'big' => 'uploads/properties/big/house2-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'small' => 'uploads/properties/small/house2-3.jpg',
                'medium' => 'uploads/properties/medium/house2-3.jpg',
                'big' => 'uploads/properties/big/house2-3.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'small' => 'uploads/properties/small/house2-4.jpg',
                'medium' => 'uploads/properties/medium/house2-4.jpg',
                'big' => 'uploads/properties/big/house2-4.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'small' => 'uploads/properties/small/plan-1.jpg',
                'medium' => 'uploads/properties/medium/plan-1.jpg',
                'big' => 'uploads/properties/big/plan-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'small' => 'uploads/properties/small/plan-2.jpg',
                'medium' => 'uploads/properties/medium/plan-2.jpg',
                'big' => 'uploads/properties/big/plan-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'small' => 'uploads/properties/video/video-1.mp4',
                'medium' => NULL,
                'big' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'small' => 'uploads/properties/small/house3-1.jpg',
                'medium' => 'uploads/properties/medium/house3-1.jpg',
                'big' => 'uploads/properties/big/house3-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'small' => 'uploads/properties/small/house3-2.jpg',
                'medium' => 'uploads/properties/medium/house3-2.jpg',
                'big' => 'uploads/properties/big/house3-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'small' => 'uploads/properties/small/house3-3.jpg',
                'medium' => 'uploads/properties/medium/house3-3.jpg',
                'big' => 'uploads/properties/big/house3-3.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'small' => 'uploads/properties/small/house3-4.jpg',
                'medium' => 'uploads/properties/medium/house3-4.jpg',
                'big' => 'uploads/properties/big/house3-4.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'small' => 'uploads/properties/small/plan-1.jpg',
                'medium' => 'uploads/properties/medium/plan-1.jpg',
                'big' => 'uploads/properties/big/plan-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'small' => 'uploads/properties/small/plan-2.jpg',
                'medium' => 'uploads/properties/medium/plan-2.jpg',
                'big' => 'uploads/properties/big/plan-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'small' => 'uploads/properties/video/video-1.mp4',
                'medium' => NULL,
                'big' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'small' => 'uploads/properties/small/office1-1.jpg',
                'medium' => 'uploads/properties/medium/office1-1.jpg',
                'big' => 'uploads/properties/big/office1-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'small' => 'uploads/properties/small/office1-2.jpg',
                'medium' => 'uploads/properties/medium/office1-2.jpg',
                'big' => 'uploads/properties/big/office1-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'small' => 'uploads/properties/small/office1-3.jpg',
                'medium' => 'uploads/properties/medium/office1-3.jpg',
                'big' => 'uploads/properties/big/office1-3.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'small' => 'uploads/properties/small/office1-4.jpg',
                'medium' => 'uploads/properties/medium/office1-4.jpg',
                'big' => 'uploads/properties/big/office1-4.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'small' => 'uploads/properties/small/office1-5.jpg',
                'medium' => 'uploads/properties/medium/office1-5.jpg',
                'big' => 'uploads/properties/big/office1-5.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'small' => 'uploads/properties/small/office1-6.jpg',
                'medium' => 'uploads/properties/medium/office1-6.jpg',
                'big' => 'uploads/properties/big/office1-6.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'small' => 'uploads/properties/small/plan-1.jpg',
                'medium' => 'uploads/properties/medium/plan-1.jpg',
                'big' => 'uploads/properties/big/plan-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'small' => 'uploads/properties/small/plan-2.jpg',
                'medium' => 'uploads/properties/medium/plan-2.jpg',
                'big' => 'uploads/properties/big/plan-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'small' => 'uploads/properties/video/video-1.mp4',
                'medium' => NULL,
                'big' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'small' => 'uploads/properties/small/office2-1.jpg',
                'medium' => 'uploads/properties/medium/office2-1.jpg',
                'big' => 'uploads/properties/big/office2-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'small' => 'uploads/properties/small/office2-2.jpg',
                'medium' => 'uploads/properties/medium/office2-2.jpg',
                'big' => 'uploads/properties/big/office2-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'small' => 'uploads/properties/small/office2-3.jpg',
                'medium' => 'uploads/properties/medium/office2-3.jpg',
                'big' => 'uploads/properties/big/office2-3.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'small' => 'uploads/properties/small/office2-4.jpg',
                'medium' => 'uploads/properties/medium/office2-4.jpg',
                'big' => 'uploads/properties/big/office2-4.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'small' => 'uploads/properties/small/office2-5.jpg',
                'medium' => 'uploads/properties/medium/office2-5.jpg',
                'big' => 'uploads/properties/big/office2-5.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'small' => 'uploads/properties/small/office2-6.jpg',
                'medium' => 'uploads/properties/medium/office2-6.jpg',
                'big' => 'uploads/properties/big/office2-6.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'small' => 'uploads/properties/small/plan-1.jpg',
                'medium' => 'uploads/properties/medium/plan-1.jpg',
                'big' => 'uploads/properties/big/plan-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'small' => 'uploads/properties/small/plan-2.jpg',
                'medium' => 'uploads/properties/medium/plan-2.jpg',
                'big' => 'uploads/properties/big/plan-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'small' => 'uploads/properties/video/video-1.mp4',
                'medium' => NULL,
                'big' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'small' => 'uploads/properties/small/apartment-1.jpg',
                'medium' => 'uploads/properties/medium/apartment-1.jpg',
                'big' => 'uploads/properties/big/apartment-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'small' => 'uploads/properties/small/apartment-2.jpg',
                'medium' => 'uploads/properties/medium/apartment-2.jpg',
                'big' => 'uploads/properties/big/apartment-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'small' => 'uploads/properties/small/apartment-3.jpg',
                'medium' => 'uploads/properties/medium/apartment-3.jpg',
                'big' => 'uploads/properties/big/apartment-3.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'small' => 'uploads/properties/small/apartment-4.jpg',
                'medium' => 'uploads/properties/medium/apartment-4.jpg',
                'big' => 'uploads/properties/big/apartment-4.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'small' => 'uploads/properties/small/apartment-5.jpg',
                'medium' => 'uploads/properties/medium/apartment-5.jpg',
                'big' => 'uploads/properties/big/apartment-5.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'small' => 'uploads/properties/small/plan-1.jpg',
                'medium' => 'uploads/properties/medium/plan-1.jpg',
                'big' => 'uploads/properties/big/plan-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'small' => 'uploads/properties/small/plan-2.jpg',
                'medium' => 'uploads/properties/medium/plan-2.jpg',
                'big' => 'uploads/properties/big/plan-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'small' => 'uploads/properties/video/video-1.mp4',
                'medium' => NULL,
                'big' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'small' => 'uploads/properties/small/flat1-1.jpg',
                'medium' => 'uploads/properties/medium/flat1-1.jpg',
                'big' => 'uploads/properties/big/flat1-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'small' => 'uploads/properties/small/flat1-2.jpg',
                'medium' => 'uploads/properties/medium/flat1-2.jpg',
                'big' => 'uploads/properties/big/flat1-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'small' => 'uploads/properties/small/flat1-3.jpg',
                'medium' => 'uploads/properties/medium/flat1-3.jpg',
                'big' => 'uploads/properties/big/flat1-3.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'small' => 'uploads/properties/small/flat1-4.jpg',
                'medium' => 'uploads/properties/medium/flat1-4.jpg',
                'big' => 'uploads/properties/big/flat1-4.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'small' => 'uploads/properties/small/plan-1.jpg',
                'medium' => 'uploads/properties/medium/plan-1.jpg',
                'big' => 'uploads/properties/big/plan-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'small' => 'uploads/properties/small/plan-2.jpg',
                'medium' => 'uploads/properties/medium/plan-2.jpg',
                'big' => 'uploads/properties/big/plan-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'small' => 'uploads/properties/video/video-1.mp4',
                'medium' => NULL,
                'big' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'small' => 'uploads/properties/small/flat2-1.jpg',
                'medium' => 'uploads/properties/medium/flat2-1.jpg',
                'big' => 'uploads/properties/big/flat2-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'small' => 'uploads/properties/small/flat2-2.jpg',
                'medium' => 'uploads/properties/medium/flat2-2.jpg',
                'big' => 'uploads/properties/big/flat2-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'small' => 'uploads/properties/small/flat2-3.jpg',
                'medium' => 'uploads/properties/medium/flat2-3.jpg',
                'big' => 'uploads/properties/big/flat2-3.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'small' => 'uploads/properties/small/flat2-4.jpg',
                'medium' => 'uploads/properties/medium/flat2-4.jpg',
                'big' => 'uploads/properties/big/flat2-4.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'small' => 'uploads/properties/small/flat2-5.jpg',
                'medium' => 'uploads/properties/medium/flat2-5.jpg',
                'big' => 'uploads/properties/big/flat2-5.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'small' => 'uploads/properties/small/plan-1.jpg',
                'medium' => 'uploads/properties/medium/plan-1.jpg',
                'big' => 'uploads/properties/big/plan-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'small' => 'uploads/properties/small/plan-2.jpg',
                'medium' => 'uploads/properties/medium/plan-2.jpg',
                'big' => 'uploads/properties/big/plan-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'small' => 'uploads/properties/video/video-1.mp4',
                'medium' => NULL,
                'big' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'small' => 'uploads/properties/small/house1-1.jpg',
                'medium' => 'uploads/properties/medium/house1-1.jpg',
                'big' => 'uploads/properties/big/house1-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'small' => 'uploads/properties/small/house1-2.jpg',
                'medium' => 'uploads/properties/medium/house1-2.jpg',
                'big' => 'uploads/properties/big/house1-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'small' => 'uploads/properties/small/house1-3.jpg',
                'medium' => 'uploads/properties/medium/house1-3.jpg',
                'big' => 'uploads/properties/big/house1-3.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'small' => 'uploads/properties/small/house1-4.jpg',
                'medium' => 'uploads/properties/medium/house1-4.jpg',
                'big' => 'uploads/properties/big/house1-4.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'small' => 'uploads/properties/small/house1-5.jpg',
                'medium' => 'uploads/properties/medium/house1-5.jpg',
                'big' => 'uploads/properties/big/house1-5.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'small' => 'uploads/properties/small/house1-6.jpg',
                'medium' => 'uploads/properties/medium/house1-6.jpg',
                'big' => 'uploads/properties/big/house1-6.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'small' => 'uploads/properties/small/plan-1.jpg',
                'medium' => 'uploads/properties/medium/plan-1.jpg',
                'big' => 'uploads/properties/big/plan-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'small' => 'uploads/properties/small/plan-2.jpg',
                'medium' => 'uploads/properties/medium/plan-2.jpg',
                'big' => 'uploads/properties/big/plan-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'small' => 'uploads/properties/video/video-1.mp4',
                'medium' => NULL,
                'big' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'small' => 'uploads/properties/small/house2-1.jpg',
                'medium' => 'uploads/properties/medium/house2-1.jpg',
                'big' => 'uploads/properties/big/house2-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'small' => 'uploads/properties/small/house2-2.jpg',
                'medium' => 'uploads/properties/medium/house2-2.jpg',
                'big' => 'uploads/properties/big/house2-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'small' => 'uploads/properties/small/house2-3.jpg',
                'medium' => 'uploads/properties/medium/house2-3.jpg',
                'big' => 'uploads/properties/big/house2-3.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'small' => 'uploads/properties/small/house2-4.jpg',
                'medium' => 'uploads/properties/medium/house2-4.jpg',
                'big' => 'uploads/properties/big/house2-4.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'small' => 'uploads/properties/small/plan-1.jpg',
                'medium' => 'uploads/properties/medium/plan-1.jpg',
                'big' => 'uploads/properties/big/plan-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'small' => 'uploads/properties/small/plan-2.jpg',
                'medium' => 'uploads/properties/medium/plan-2.jpg',
                'big' => 'uploads/properties/big/plan-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'small' => 'uploads/properties/video/video-1.mp4',
                'medium' => NULL,
                'big' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'small' => 'uploads/properties/small/house3-1.jpg',
                'medium' => 'uploads/properties/medium/house3-1.jpg',
                'big' => 'uploads/properties/big/house3-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'small' => 'uploads/properties/small/house3-2.jpg',
                'medium' => 'uploads/properties/medium/house3-2.jpg',
                'big' => 'uploads/properties/big/house3-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'small' => 'uploads/properties/small/house3-3.jpg',
                'medium' => 'uploads/properties/medium/house3-3.jpg',
                'big' => 'uploads/properties/big/house3-3.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'small' => 'uploads/properties/small/house3-4.jpg',
                'medium' => 'uploads/properties/medium/house3-4.jpg',
                'big' => 'uploads/properties/big/house3-4.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'small' => 'uploads/properties/small/plan-1.jpg',
                'medium' => 'uploads/properties/medium/plan-1.jpg',
                'big' => 'uploads/properties/big/plan-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'small' => 'uploads/properties/small/plan-2.jpg',
                'medium' => 'uploads/properties/medium/plan-2.jpg',
                'big' => 'uploads/properties/big/plan-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'small' => 'uploads/properties/video/video-1.mp4',
                'medium' => NULL,
                'big' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'small' => 'uploads/properties/small/office1-1.jpg',
                'medium' => 'uploads/properties/medium/office1-1.jpg',
                'big' => 'uploads/properties/big/office1-1.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'small' => 'uploads/properties/small/office1-2.jpg',
                'medium' => 'uploads/properties/medium/office1-2.jpg',
                'big' => 'uploads/properties/big/office1-2.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'small' => 'uploads/properties/small/office1-3.jpg',
                'medium' => 'uploads/properties/medium/office1-3.jpg',
                'big' => 'uploads/properties/big/office1-3.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'small' => 'uploads/properties/small/office1-4.jpg',
                'medium' => 'uploads/properties/medium/office1-4.jpg',
                'big' => 'uploads/properties/big/office1-4.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'small' => 'uploads/properties/small/office1-5.jpg',
                'medium' => 'uploads/properties/medium/office1-5.jpg',
                'big' => 'uploads/properties/big/office1-5.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'small' => 'uploads/properties/small/office1-6.jpg',
                'medium' => 'uploads/properties/medium/office1-6.jpg',
                'big' => 'uploads/properties/big/office1-6.jpg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 129,
                'small' => 'uploads/small/09e19ceb39be7b7.jpg',
                'medium' => 'uploads/medium/c559e4facfd3042.jpg',
                'big' => 'uploads/big/948e4237c37d131.jpg',
                'created_at' => '2019-12-20 19:50:38',
                'updated_at' => '2019-12-20 19:50:39',
            ),
        ));
        
        
    }
}