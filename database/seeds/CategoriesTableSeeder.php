<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
            [
                'title' =>  'Uncategorized',
                'slug'  =>  'uncategorized'
            ],
            [
                'title' =>  'New Guns',
                'slug'  =>  'new-guns'
            ],
            [
                'title' =>  'Nothing New Guns',
                'slug'  =>  'nothing-new-guns'
            ],
            [
                'title' =>  'Post War Guns',
                'slug'  =>  'post-war-guns'
            ],
            [
                'title' =>  'Social Guns',
                'slug'  =>  'social-guns'
            ],
            [
                'title' =>  'Party Guns',
                'slug'  =>  'party-guns'
            ],
            [
                'title' =>  'Happy Guns',
                'slug'  =>  'happy-guns'
            ]
        ]);

        // update the post table
//        for($post_id = 1; $post_id <= 100; $post_id++)
//        {
//            $category_id = rand(1, 7);
//            DB::table('posts')->where('id', $post_id)->update(['category_id' => $category_id]);
//        }
    }
}
