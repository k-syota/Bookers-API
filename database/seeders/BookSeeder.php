<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert(
            [
                'name' => 'test_book1',
                'author_id' => 1,
                'category_id' => 1,
            ],
        );
        DB::table('books')->insert(
            [
                'name' => 'test_book2',
                'author_id' => 2,
                'category_id' => 2,
            ],
        );
        DB::table('books')->insert(
            [
                'name' => 'test_book3',
                'author_id' => 3,
                'category_id' => 3,
            ],
        );
        DB::table('books')->insert(
            [
                'name' => 'test_book4',
                'author_id' => 4,
                'category_id' => 4,
            ],
        );
    }
}
