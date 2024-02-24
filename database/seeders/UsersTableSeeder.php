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

        ])->each(fn ($user) => \App\Models\User::factory()->create($user));
    }

}
