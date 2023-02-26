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
        //下記コマンドを記述2/26
        DB::table('users')->insert([
            ['users' => 'id'],
            ['users' => 'username'],
            ['users' => 'mail'],
            ['users' => 'password'],
            ['users' => 'bio'],
            ['users' => 'image'],
            ['users' => 'created_at'],
            ['users' => 'updated_at']
        ]);
    }
}
