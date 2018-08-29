<?php

use Illuminate\Database\Seeder;

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

        //generate 3 users
        DB::table('users')->insert([
            [
                'name'      =>  "Jhon Doe",
                'email'     =>  "jhondoe@test.com",
                'password'  =>  bcrypt('123456')
            ],
            [
                'name'      =>  "Jane Doe",
                'email'     =>  "janedoe@test.com",
                'password'  =>  bcrypt('123456')
            ],
            [
                'name'      =>  "Bob Merlin",
                'email'     =>  "bob@test.com",
                'password'  =>  bcrypt('123456')
            ],
        ]);
    }
}
