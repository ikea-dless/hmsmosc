<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('menus')->truncate();

        DB::table('menus')->insert([
            [
                'name' => 'KITランチ',
                'cost' => 330
            ],
            [
                'name' => 'うどん',
                'cost' => 190
            ],
            [
                'name' => 'カツ丼',
                'cost' => 380
            ]
        ]);
    }
}