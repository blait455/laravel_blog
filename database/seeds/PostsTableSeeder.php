<?php

use Illuminate\Database\Seeder;
Use Faker\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();

        $posts =[];
        $faker = Factory::create();
        // generate 10 dum
        for($i = 1;$i <= 10; $i++)
        {
            $date = date("Y-m-d H:i:s", strtotime("2017-7-18 08:00:00 +{$i} days"));
            $posts[] = [
                'author_id'     => rand(1, 3),
                'title'         => $faker->sentence(rand(8, 12)),
                'slug'          => $faker->slug(),
                'excerpt'       => $faker->text(rand(200, 200)),
                'body'          => $faker->paragraph(rand(8, 32), true),
                'image'         => "http://themes.wplook.com/html/charity/assets/images/temp/sponsor-image.jpg",
                'created_at'    => $date,
                'updated_at'    => $date
            ];
        }
        DB::table('posts')->insert($posts);
    }
}
