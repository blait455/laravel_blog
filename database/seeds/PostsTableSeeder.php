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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('posts')->truncate();


        $posts =[];
        $faker = Factory::create();

        // generate 10 dum
        for($i = 1;$i <= 100; $i++)
        {
            $dates = \Carbon\Carbon::create(2018, 6, 1, 18, 9);
            $date = date("Y-m-d H:i:s", strtotime("2017-7-18 08:00:00 +{$i} days"));
            $posts[] = [
                'author_id'     => rand(1, 3),
                'title'         => $faker->sentence(rand(4, 8)),
                'slug'          => $faker->slug(),
                'excerpt'       => $faker->text(rand(200, 200)),
                'body'          => $faker->paragraph(rand(8, 32), true),
                'image'         => "http://themes.wplook.com/html/charity/assets/images/temp/sponsor-image.jpg",
                'image_alt'     => $faker->name,
                'created_at'    => $date,
                'updated_at'    => $date,
                'published_at'  => rand(1, 0) == 0 ? null : $dates->addDays($i),
                'category_id'   => rand(1, 7),
                'view_count'   => rand(1, 10) * 10
            ];
        }
        DB::table('posts')->insert($posts);

    }
}
