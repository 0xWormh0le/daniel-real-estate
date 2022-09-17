<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ConnectRelationshipsSeeder::class);
        $this->call(ThemesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        
        $this->call(LanguageTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(PaymentlistTableSeeder::class);

        Model::reguard();
        $this->call(ActivationsTableSeeder::class);
        $this->call(AttachmentsTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(PropertiesTableSeeder::class);
        $this->call(PropertyAdditionalFeaturesTableSeeder::class);
        $this->call(PropertyDetailsTableSeeder::class);
        $this->call(PropertyFeaturePivotTableSeeder::class);
        $this->call(PropertyFeaturesTableSeeder::class);
        $this->call(PropertyGalleriesTableSeeder::class);
        $this->call(PropertyPlansTableSeeder::class);
        $this->call(PropertyStatusPivotTableSeeder::class);
        $this->call(PropertyStatusesTableSeeder::class);
        $this->call(PropertyTypesTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(UserProfilesTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
    }
}
