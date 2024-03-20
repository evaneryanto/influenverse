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
        DB::table('brands')->insert(
        [
            'user_id' =>'1',
            'company_name' =>'Brand 01',
            'npwp'=>'123',
            'profil_pic_path'=>'profile01',
            'addres'=>'Karang Menjangan N0. 06',
            'phone_number'=>'088811',
            'website'=>'brand01.com',
            'province_id'=>'15',
            'category_id'=>'1',
        ],
        [
            'user_id' =>'4',
            'company_name' =>'Brand 02',
            'npwp'=>'122',
            'profil_pic_path'=>'Profile02',
            'addres'=>'Jambu No.12',
            'phone_number'=>'0822123',
            'website'=>'brand02.com',
            'province_id'=>'14',
            'category_id'=>'2',
        ],
        [
            'user_id' =>'6',
            'company_name' =>'Brand 02',
            'npwp'=>'122',
            'profil_pic_path'=>'Profile02',
            'addres'=>'Jambu No.12',
            'phone_number'=>'0822123',
            'website'=>'brand02.com',
            'province_id'=>'13',
            'category_id'=>'3',
        ],

    );
}
}
