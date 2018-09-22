<?php

use Illuminate\Database\Seeder;

class SocialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socials')->truncate();

        DB::table('socials')->insert([
            [
                'title'     =>  'Facebook',
                'slug'      =>  'facebook',
                'social_url'=>  ''
            ],
            [
                'title'     =>  'Instagram',
                'slug'      =>  'instagram',
                'social_url'=>  ''
            ],
            [
                'title'     =>  'Twitter',
                'slug'      =>  'twitter',
                'social_url'=>  ''
            ]
        ]);
    }
}
