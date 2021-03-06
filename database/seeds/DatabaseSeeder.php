<?php

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
         $this->call(UsersTableSeeder::class);
         $this->call(SiteAddressesTableSeeder::class);
         $this->call(PostsTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(SeosTableSeeder::class);
         $this->call(RolesTableSeeder::class);
         $this->call(PermissionsTableSeeder::class);
         $this->call(SocialsTableSeeder::class);
    }
}
