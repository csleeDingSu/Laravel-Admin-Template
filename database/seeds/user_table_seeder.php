<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class user_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "rposadmin",
            'email' => 'master@gmail.com',
            'password' => Hash::make('123456'),
            // 'level' => 1
        ]);
    }
}
