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
        //下記コマンドを記述2/5
        DB::table('users')->insert([
            ['post' => 'username'],
            ['post' => 'mail'],
            ['post' => 'password']
        ]);
    }
}
