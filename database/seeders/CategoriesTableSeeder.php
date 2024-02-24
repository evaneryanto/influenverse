<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['name' => 'Technology'],
            ['name' => 'Sports'],
            ['name' => 'Business'],
            ['name' => 'Entertainment'],
            ['name' => 'Science'],
            ['name' => 'Health'],
            ['name' => 'Food'],
            ['name' => 'Travel'],
            ['name' => 'Music'],
            ['name' => 'Books'],
            ['name' => 'Gaming'],
            ['name' => 'Fashion'],
            ['name' => 'Pets'],
            ['name' => 'Art'],
            ['name' => 'Home'],

        ])->each(fn ($category) => \App\Models\Category::create($category));
    }
}
