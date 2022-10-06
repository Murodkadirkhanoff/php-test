<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'title' => 'Test',
                'quantity' => 2,
                'price' => 500
            ],
            [
                'title' => 'Test',
                'quantity' => 3,
                'price' => 500
            ],
            [
                'title' => 'Test',
                'quantity' => 4,
                'price' => 500
            ]
        ]);
    }
}
