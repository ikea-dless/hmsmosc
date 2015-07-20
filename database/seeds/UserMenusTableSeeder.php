<?php

use Illuminate\Database\Seeder;

class UserMenusTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_menus')->truncate();

        DB::table('user_menus')->insert([
            [
                'user_id' => 1,
                'menu_id' => 1
            ],
            [
                'user_id' => 1,
                'menu_id' => 2
            ],
            [
                'user_id' => 1,
                'menu_id' => 3
            ]
        ]);
    }
}