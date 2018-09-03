<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        //faker object
        $faker = Factory::create();

        //generate 3 users
        DB::table('users')->insert([
            [
                'name'      =>  "Jhon Doe",
                'slug'      =>  "jhon-doe",
                'email'     =>  "jhondoe@test.com",
                'password'  =>  bcrypt('123456'),
                'bio'       =>  $faker->text(rand(100, 150))
            ],
            [
                'name'      =>  "Jane Doe",
                'slug'      =>  "jane-doe",
                'email'     =>  "janedoe@test.com",
                'password'  =>  bcrypt('123456'),
                'bio'       =>  $faker->text(rand(100, 150))
            ],
            [
                'name'      =>  "Bob Merlin",
                'slug'      =>  "bob-merlin",
                'email'     =>  "bob@test.com",
                'password'  =>  bcrypt('123456'),
                'bio'       =>  $faker->text(rand(100, 150))
            ],
        ]);
    }
}
