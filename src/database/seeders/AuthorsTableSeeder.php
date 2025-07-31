<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AuthorsTableSeeder extends Seeder
{
    public function run()
    {
        logger('AuthorsTableSeeder running');
        DB::table('authors')->insert([
            [
                'name' => 'tony田中',
                'age' => 35,
                'nationality' => 'American',
                'created_at' => Carbon::parse('2025-07-17 10:28:39'),
                'updated_at' => Carbon::parse('2025-07-21 06:39:47'),
            ],
            [
                'name' => 'jack',
                'age' => 20,
                'nationality' => 'British',
                'created_at' => Carbon::parse('2025-07-17 10:28:39'),
                'updated_at' => Carbon::parse('2025-07-17 10:28:39'),
            ],
            [
                'name' => 'sara',
                'age' => 45,
                'nationality' => 'Egyptian',
                'created_at' => Carbon::parse('2025-07-17 10:28:39'),
                'updated_at' => Carbon::parse('2025-07-17 10:28:39'),
            ],
            [
                'name' => 'おれ',
                'age' => 29,
                'nationality' => '王国浦和',
                'created_at' => Carbon::parse('2025-07-17 01:53:32'),
                'updated_at' => Carbon::parse('2025-07-17 01:53:32'),
            ],
            [
                'name' => 'アレハンドロ・ガルナチョ',
                'age' => 22,
                'nationality' => 'Argentina',
                'created_at' => Carbon::parse('2025-07-17 02:14:00'),
                'updated_at' => Carbon::parse('2025-07-17 06:16:44'),
            ],
            [
                'name' => 'ソル・バッドガイ',
                'age' => 150,
                'nationality' => 'USA',
                'created_at' => Carbon::parse('2025-07-17 06:41:03'),
                'updated_at' => Carbon::parse('2025-07-17 06:41:03'),
            ]
        ]);
    }
}