<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryInfluencerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'category_id' => 1,
                'influencer_id' => 1,
            ],
            [
                'category_id' => 2,
                'influencer_id' => 1,
            ],
            [
                'category_id' => 3,
                'influencer_id' => 1,
            ],
            [
                'category_id' => 3,
                'influencer_id' => 2,
            ],
            [
                'category_id' => 4,
                'influencer_id' => 2,
            ],
            [
                'category_id' => 6,
                'influencer_id' => 2,
            ],

        ])->each(fn ($category_influencer) => \App\Models\CategoryInfluencer::create($category_influencer));
    }
}
