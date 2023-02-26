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
            ['username' => 'nomura',
            'mail' => 'animal7cat@hotmail.co.jp',
            'password' => 'animals7',]
        ]);
    }
}
