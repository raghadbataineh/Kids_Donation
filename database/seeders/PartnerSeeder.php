<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partners')->delete();
        DB::table('partners')->insert([
            [
                'image' => 'img (1).png',
            ],
            [
                'image' => 'img (2).png',
            ],
            [
                'image' => 'img (3).png',
            ],
            [
                'image' => 'img (4).png',
            ],
            [
                'image' => 'img (5).png',
            ],
            [
                'image' => 'img (1).png',
            ],
            [
                'image' => 'img (6).png',
            ],

        ]);
    }
}
