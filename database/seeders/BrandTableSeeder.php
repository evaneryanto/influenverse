<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
        [
            'user_id' =>'2',
            'company_name' =>'Brand 01',
            'npwp'=>'123',
            'profil_pic_path'=>'profile01',
            'addres'=>'Karang Menjangan N0. 06',
            'phone_number'=>'088811',
            'website'=>'brand01.com',
            'province_id'=>'15',

        ],
        [
            'user_id' =>'6',
            'company_name' =>'Brand 03',
            'npwp'=>'127',
            'profil_pic_path'=>'Profile03',
            'addres'=>'Mangga No.12',
            'phone_number'=>'0833317',
            'website'=>'brand03.com',
            'province_id'=>'14',

        ],
        [
            'user_id' =>'4',
            'company_name' =>'Brand 02',
            'npwp'=>'122',
            'profil_pic_path'=>'Profile02',
            'addres'=>'Jambu No.12',
            'phone_number'=>'0822123',
            'website'=>'brand02.com',
            'province_id'=>'13',

        ],

    ]);
}
}
