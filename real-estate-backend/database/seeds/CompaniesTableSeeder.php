<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('companies')->delete();
        
        \DB::table('companies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Green View',
                'address1' => 'Tioga Ave',
                'address2' => NULL,
                'logo' => '/upload/company-logo/aloha.png',
                'city' => 'New York',
                'state' => 'NY',
                'zip' => '13532',
                'phone1' => NULL,
                'phone2' => NULL,
                'fax' => NULL,
                'email' => NULL,
                'description' => NULL,
                'about_us' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'CNH',
                'address1' => 'Eshelman st',
                'address2' => NULL,
                'logo' => '/upload/company-logo/best.png',
                'city' => 'Austin',
                'state' => 'TX',
                'zip' => '13274',
                'phone1' => NULL,
                'phone2' => NULL,
                'fax' => NULL,
                'email' => NULL,
                'description' => NULL,
                'about_us' => NULL,
                'created_at' => '2019-11-13 20:36:12',
                'updated_at' => '2019-11-13 20:36:12',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Silver',
                'address1' => 'adf',
                'address2' => 'adf',
                'logo' => '/upload/company-logo/1588251302qESWwQPOLJ.png',
                'city' => 'adf',
                'state' => 'adf',
                'zip' => '12345',
                'phone1' => '123',
                'phone2' => '123',
                'fax' => NULL,
                'email' => 'silver@silver.com',
                'description' => NULL,
                'about_us' => 'adf',
                'created_at' => '2020-04-30 12:55:01',
                'updated_at' => '2020-04-30 12:55:02',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Test',
                'address1' => 'test',
                'address2' => 'test',
                'logo' => '/upload/company-logo/15882753899ZyoW8Oqw4.jpg',
                'city' => 'test',
                'state' => 'test',
                'zip' => '123',
                'phone1' => '123',
                'phone2' => '123',
                'fax' => '123',
                'email' => 'test@123.com',
                'description' => 'test1234',
                'about_us' => 'test',
                'created_at' => '2020-04-30 18:27:47',
                'updated_at' => '2020-05-01 14:34:10',
                'deleted_at' => '2020-05-01 14:34:10',
            ),
        ));
        
        
    }
}