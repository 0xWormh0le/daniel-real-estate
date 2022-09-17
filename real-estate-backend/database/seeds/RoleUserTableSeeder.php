<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_user')->delete();
        
        \DB::table('role_user')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'user_id' => 9,
                'created_at' => '2020-04-27 17:35:40',
                'updated_at' => '2020-04-27 17:35:43',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'user_id' => 1,
                'created_at' => '2020-04-27 19:02:55',
                'updated_at' => '2020-04-27 19:02:58',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'user_id' => 2,
                'created_at' => '2020-04-27 19:03:02',
                'updated_at' => '2020-04-27 19:03:04',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'user_id' => 3,
                'created_at' => '2020-04-27 19:03:08',
                'updated_at' => '2020-04-27 19:03:09',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 2,
                'user_id' => 4,
                'created_at' => '2020-04-27 19:03:10',
                'updated_at' => '2020-04-27 19:03:11',
            ),
            5 => 
            array (
                'id' => 6,
                'role_id' => 2,
                'user_id' => 5,
                'created_at' => '2020-04-27 19:03:12',
                'updated_at' => '2020-04-27 19:03:13',
            ),
            6 => 
            array (
                'id' => 7,
                'role_id' => 3,
                'user_id' => 6,
                'created_at' => '2020-04-27 19:03:13',
                'updated_at' => '2020-04-27 19:03:14',
            ),
            7 => 
            array (
                'id' => 8,
                'role_id' => 2,
                'user_id' => 7,
                'created_at' => '2020-04-27 19:03:15',
                'updated_at' => '2020-04-27 19:03:16',
            ),
            8 => 
            array (
                'id' => 9,
                'role_id' => 3,
                'user_id' => 8,
                'created_at' => '2020-04-27 19:03:16',
                'updated_at' => '2020-04-27 19:03:17',
            ),
            9 => 
            array (
                'id' => 10,
                'role_id' => 2,
                'user_id' => 14,
                'created_at' => '2020-04-29 06:49:25',
                'updated_at' => '2020-04-29 06:49:25',
            ),
            10 => 
            array (
                'id' => 11,
                'role_id' => 2,
                'user_id' => 16,
                'created_at' => '2020-04-29 07:05:12',
                'updated_at' => '2020-04-29 07:05:12',
            ),
            11 => 
            array (
                'id' => 12,
                'role_id' => 2,
                'user_id' => 17,
                'created_at' => '2020-04-29 07:10:12',
                'updated_at' => '2020-04-29 07:10:12',
            ),
            12 => 
            array (
                'id' => 13,
                'role_id' => 4,
                'user_id' => 10,
                'created_at' => '2020-04-29 10:40:17',
                'updated_at' => '2020-04-29 10:40:20',
            ),
            13 => 
            array (
                'id' => 14,
                'role_id' => 2,
                'user_id' => 18,
                'created_at' => '2020-04-29 08:01:32',
                'updated_at' => '2020-04-29 08:01:32',
            ),
            14 => 
            array (
                'id' => 15,
                'role_id' => 4,
                'user_id' => 19,
                'created_at' => '2020-04-29 12:17:39',
                'updated_at' => '2020-04-29 12:17:39',
            ),
            15 => 
            array (
                'id' => 16,
                'role_id' => 2,
                'user_id' => 20,
                'created_at' => '2020-04-29 12:18:43',
                'updated_at' => '2020-04-29 12:18:43',
            ),
            16 => 
            array (
                'id' => 17,
                'role_id' => 3,
                'user_id' => 21,
                'created_at' => '2020-04-30 18:26:15',
                'updated_at' => '2020-04-30 18:26:15',
            ),
        ));
        
        
    }
}