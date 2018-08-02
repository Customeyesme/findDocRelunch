<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            array('id' => '1','name' => 'Marlind','email' => 'marlind93@gmail.com','password' => '$2y$12$hIwV46NEI5NIPs.xmmSReuUrjb6qyYofpJ7y5NPQ2RgZjrL8JxWlK','remember_token' => NULL,'created_at' => '2018-07-05 10:27:28','updated_at' => '2018-07-05 10:27:28')
        );

        DB::table('users')->insert($users);
    }
}
