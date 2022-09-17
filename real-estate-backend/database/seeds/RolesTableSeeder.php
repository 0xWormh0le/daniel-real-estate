<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'description' => 'Administrator',
                'created_at' => '2020-04-27 17:22:42',
                'updated_at' => '2020-04-27 17:22:44',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Seller',
                'description' => 'selling',
                'created_at' => '2020-04-27 17:23:07',
                'updated_at' => '2020-04-27 17:23:10',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Rentor',
                'description' => 'rentor',
                'created_at' => '2020-04-27 17:23:21',
                'updated_at' => '2020-04-27 17:23:23',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'PropertyManager',
                'description' => 'property manager',
                'created_at' => '2020-04-29 09:33:28',
                'updated_at' => '2020-04-29 09:33:31',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'CompanyAdmin',
                'description' => 'company admin',
                'created_at' => '2020-04-29 09:33:33',
                'updated_at' => '2020-04-29 09:33:34',
            ),
        ));
        
        
    }
}