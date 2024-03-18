<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfluencersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'user_id' => 1,
                'province_id' => 1,
                'about_me' => 'I am an influencer',
                'is_married' => false,
                'address' => 'Jl Mawar',
                'birth_date' => '2000-01-01',
                'gender' => 'male',
                'phone_number' => '081234567890',
            ],
            [
                'user_id' => 3,
                'province_id' => 10,
                'about_me' => 'i love creating content',
                'is_married' => false,
                'address' => 'Jl Mawar',
                'birth_date' => '1997-01-01',
                'gender' => 'female',
                'phone_number' => '081234511114',
            ],

        ])->each(fn ($influencer) => \App\Models\Influencer::create($influencer));
    }
}
