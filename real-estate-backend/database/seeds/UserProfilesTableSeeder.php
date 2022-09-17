<?php

use Illuminate\Database\Seeder;

class UserProfilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_profiles')->delete();
        
        \DB::table('user_profiles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'description' => NULL,
                'organization' => NULL,
                'phone' => NULL,
                'facebook' => NULL,
                'twitter' => NULL,
                'linkedin' => NULL,
                'instagram' => NULL,
                'website' => NULL,
                'ratings_count' => 23,
                'ratings_value' => 4,
                'image' => 'uploads/user-avatar/1.jpg',
                'cc_num' => NULL,
                'cvv' => NULL,
                'expire_date' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'description' => NULL,
                'organization' => NULL,
                'phone' => '+1 2346575',
                'facebook' => NULL,
                'twitter' => 'https://twitter/jane',
                'linkedin' => NULL,
                'instagram' => NULL,
                'website' => NULL,
                'ratings_count' => 62,
                'ratings_value' => 5,
                'image' => 'uploads/user-avatar/2.jpg',
                'cc_num' => NULL,
                'cvv' => NULL,
                'expire_date' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 3,
                'description' => NULL,
                'organization' => NULL,
                'phone' => '+1 4345366',
                'facebook' => NULL,
                'twitter' => NULL,
                'linkedin' => 'https://linkedin/in/tom',
                'instagram' => NULL,
                'website' => NULL,
                'ratings_count' => 3,
                'ratings_value' => 3,
                'image' => 'uploads/user-avatar/3.jpg',
                'cc_num' => NULL,
                'cvv' => NULL,
                'expire_date' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 4,
                'description' => NULL,
                'organization' => NULL,
                'phone' => '+1 4353464',
                'facebook' => 'https://facebook.com/billy',
                'twitter' => NULL,
                'linkedin' => NULL,
                'instagram' => NULL,
                'website' => NULL,
                'ratings_count' => 14,
                'ratings_value' => 4,
                'image' => 'uploads/user-avatar/4.jpg',
                'cc_num' => NULL,
                'cvv' => NULL,
                'expire_date' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 5,
                'description' => NULL,
                'organization' => NULL,
                'phone' => '+1 5523213',
                'facebook' => 'https:://facebook.com/max',
                'twitter' => NULL,
                'linkedin' => NULL,
                'instagram' => NULL,
                'website' => NULL,
                'ratings_count' => 18,
                'ratings_value' => 2,
                'image' => 'uploads/user-avatar/5.jpg',
                'cc_num' => NULL,
                'cvv' => NULL,
                'expire_date' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 6,
                'description' => NULL,
                'organization' => NULL,
                'phone' => '+1 4324566',
                'facebook' => NULL,
                'twitter' => NULL,
                'linkedin' => NULL,
                'instagram' => 'https://instagram.com/jin',
                'website' => NULL,
                'ratings_count' => 32,
                'ratings_value' => 3,
                'image' => 'uploads/user-avatar/6.jpg',
                'cc_num' => NULL,
                'cvv' => NULL,
                'expire_date' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 7,
                'description' => NULL,
                'organization' => NULL,
                'phone' => '+1 342566',
                'facebook' => NULL,
                'twitter' => NULL,
                'linkedin' => NULL,
                'instagram' => NULL,
                'website' => 'https://jin.com',
                'ratings_count' => 52,
                'ratings_value' => 4,
                'image' => 'uploads/user-avatar/7.jpg',
                'cc_num' => NULL,
                'cvv' => NULL,
                'expire_date' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 8,
                'description' => NULL,
                'organization' => NULL,
                'phone' => NULL,
                'facebook' => NULL,
                'twitter' => NULL,
                'linkedin' => NULL,
                'instagram' => NULL,
                'website' => NULL,
                'ratings_count' => NULL,
                'ratings_value' => NULL,
                'image' => NULL,
                'cc_num' => NULL,
                'cvv' => NULL,
                'expire_date' => NULL,
                'created_at' => '2020-03-27 06:51:06',
                'updated_at' => '2020-03-27 06:51:06',
            ),
        ));
        
        
    }
}