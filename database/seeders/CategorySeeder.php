<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(
            [
                'name' => 'ミステリー',
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'ホラー',
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => '推理',
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'スポーツ',
            ]
        );
    }
}
