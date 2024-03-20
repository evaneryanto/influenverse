<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['name' => 'Aceh', 'id' => 1],
            ['name' => 'Sumatera Utara', 'id' => 2],
            ['name' => 'Sumatera Barat', 'id' => 3],
            ['name' => 'Riau', 'id' => 4],
            ['name' => 'Jambi', 'id' => 5],
            ['name' => 'Sumatera Selatan', 'id' => 6],
            ['name' => 'Bengkulu', 'id' => 7],
            ['name' => 'Lampung', 'id' => 8],
            ['name' => 'Kepulauan Bangka Belitung', 'id' => 9],
            ['name' => 'Kepulauan Riau', 'id' => 10],
            ['name' => 'DKI Jakarta', 'id' => 11],
            ['name' => 'Jawa Barat', 'id' => 12],
            ['name' => 'Jawa Tengah', 'id' => 13],
            ['name' => 'DI Yogyakarta', 'id' => 14],
            ['name' => 'Jawa Timur', 'id' => 15],
            ['name' => 'Banten', 'id' => 16],
            ['name' => 'Bali', 'id' => 17],
            ['name' => 'Nusa Tenggara Barat', 'id' => 18],
            ['name' => 'Nusa Tenggara Timur', 'id' => 19],
            ['name' => 'Kalimantan Barat', 'id' => 20],
            ['name' => 'Kalimantan Tengah', 'id' => 21],
            ['name' => 'Kalimantan Selatan', 'id' => 22],
            ['name' => 'Kalimantan Timur', 'id' => 23],
            ['name' => 'Kalimantan Utara', 'id' => 24],
            ['name' => 'Sulawesi Utara', 'id' => 25],
            ['name' => 'Sulawesi Tengah', 'id' => 26],
            ['name' => 'Sulawesi Selatan', 'id' => 27],
            ['name' => 'Sulawesi Tenggara', 'id' => 28],
            ['name' => 'Gorontalo', 'id' => 29],
            ['name' => 'Sulawesi Barat', 'id' => 30],
            ['name' => 'Maluku', 'id' => 31],
            ['name' => 'Maluku Utara', 'id' => 32],
            ['name' => 'Papua Barat', 'id' => 33],
            ['name' => 'Papua', 'id' => 34]

        ])->each(fn ($province) => \App\Models\Province::create($province));
    }
}
