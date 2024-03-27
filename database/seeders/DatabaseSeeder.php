<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $this->call(CategoriesTableSeeder::class);
       $this->call(ProvincesTableSeeder::class);
       $this->call(UsersTableSeeder::class);
       $this->call(BrandTableSeeder::class);
       $this->call(InfluencersTableSeeder::class);
       $this->call(CategoryInfluencerTableSeeder::class);
       $this->call(CategoryBrandTableSeeder::class);
    }
}
