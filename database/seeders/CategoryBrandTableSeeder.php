<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryBrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_brand')->insert([
            [
                'brand_id' => 2,
                'category_id'=> 1,
            ],
            [
                'brand_id' => 2,
                'category_id'=> 2,
            ],
            [
                'brand_id' => 2,
                'category_id'=> 3,
            ],
            [
                'brand_id' => 4,
                'category_id'=> 4,
            ],
            [
                'brand_id' => 4,
                'category_id'=> 5,
            ],
            [
                'brand_id' => 4,
                'category_id'=> 6,
            ],
            [
                'brand_id' => 6,
                'category_id'=> 7,
            ],
            [
                'brand_id' => 6,
                'category_id'=> 8,
            ],
        ]);
    }
}
