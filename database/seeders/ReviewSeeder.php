<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert(
            [
                'user_id' => 1,
                'book_id' => 1,
                'title' => 'test-title1',
                'text' => 'test-text1',
            ],
        );
        DB::table('reviews')->insert(
            [
                'user_id' => 1,
                'book_id' => 2,
                'title' => 'test-title2',
                'text' => 'test-text2',
            ],
        );
        DB::table('reviews')->insert(
            [
                'user_id' => 1,
                'book_id' => 3,
                'title' => 'test-title3',
                'text' => 'test-text3',
            ],
        );
        DB::table('reviews')->insert(
            [
                'user_id' => 1,
                'book_id' => 4,
                'title' => 'test-title4',
                'text' => 'test-text4',
            ],
        );
    }
}
