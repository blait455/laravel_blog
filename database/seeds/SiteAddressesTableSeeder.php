<?php

use Illuminate\Database\Seeder;

class SiteAddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_addresses')->truncate();

        DB::table('site_addresses')->insert([
            [
                'name' =>  'Local Site',
                'address' =>  'http://127.0.0.1:8000'
            ],
            [
                'name' =>  'Test Kittenads',
                'address' =>  'https://test.kittenads.co.uk'
            ],
            [
                'name' =>  'Test Gun Star',
                'address' =>  'https://test.gunstar.co.uk'
            ]
        ]);

    }
}
