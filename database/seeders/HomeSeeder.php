<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->delete();
        DB::table('categories')->insert([
            [
                'id' => '1',
                'title' => 'Stationery',
                'description' => 'lourn nnkslnfdslkfndslkfsd',
                'image' => 'img5.png',
                'type' => '10',

            ],
            [
                'id' => '2',
                'title' => 'Service',
                'description' => 'lourn nnkslnfdslkfndslkfsd',
                'image' => 'img6.png',
                'type' => '10',
            ],
            [
                'id' => '3',
                'title' => 'Tawjihi',
                'description' => 'lourn nnkslnfdslkfndslkfsd',
                'image' => 'img7.png',
                'type' => '10',
            ],
            [
                'id' => '4',
                'title' => 'Tawjihi',
                'description' => 'lourn nnkslnfdslkfndslkfsd',
                'image' => 'img7.png',
                'type' => '10',
            ]
        ]);
    }
}
