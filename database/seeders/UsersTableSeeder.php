<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'name' => 'User Influencer',
                'email' => 'influencer@example.com',
                'username' => 'influencer01',
                'password' => bcrypt('abcd1234'),
                'role' => 'influencer'
            ],
            [
                'name' => 'User Brand',
                'email' => 'brand@example.com',
                'username' => 'brand01',
                'password' => bcrypt('abcd1234'),
                'role' => 'brand'
            ],
            [
                'name' => 'User Influencer 3',
                'email' => 'influencer3@example.com',
                'username' => 'influencer03',
                'password' => bcrypt('abcd1234'),
                'role' => 'influencer'
            ],
            [
                'name' => 'User Brand 3',
                'email' => 'brand3@example.com',
                'username' => 'brand03',
                'password' => bcrypt('abcd1234'),
                'role' => 'brand'
            ],
            [
                'name' => 'User Influencer 2',
                'email' => 'influencer2@example.com',
                'username' => 'influencer02',
                'password' => bcrypt('abcd1234'),
                'role' => 'influencer'
            ],
            [
                'name' => 'User Brand 2',
                'email' => 'brand2@example.com',
                'username' => 'brand02',
                'password' => bcrypt('abcd1234'),
                'role' => 'brand'
            ],

        ])->each(fn ($user) => \App\Models\User::factory()->create($user));
    }

}
