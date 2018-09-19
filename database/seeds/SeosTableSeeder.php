<?php

use Illuminate\Database\Seeder;

class SeosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seos')->truncate();

        DB::table('seos')->insert([
            [
                'title' =>  'Index',
                'slug'  =>  'index'
            ],
            [
                'title' =>  'Author',
                'slug'  =>  'author'
            ],
            [
                'title' =>  'Category',
                'slug'  =>  'category'
            ]
        ]);
    }
}
