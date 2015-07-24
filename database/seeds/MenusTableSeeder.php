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
                'name' => '冷やしうどん',
                'cost' => 200
            ],
            [
                'name' => '夕食セット',
                'cost' => 500
            ],
            [
                'name' => 'ラーメン',
                'cost' => 260
            ],
            [
                'name' => 'カレーライス',
                'cost' => 260
            ],
            [
                'name' => 'Aランチ',
                'cost' => 290
            ],
            [
                'name' => 'とろろ芋',
                'cost' => 80
            ],
            [
                'name' => 'グリーンサラダ',
                'cost' => 80
            ],
            [
                'name' => 'ごはん並',
                'cost' => 120
            ],
            [
                'name' => '味噌汁',
                'cost' => 80
            ],
            [
                'name' => '朝食セット',
                'cost' => 250
            ]
        ]);
    }
}