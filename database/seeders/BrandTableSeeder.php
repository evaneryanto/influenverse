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
            'user_id' =>'brand01',
            'company_name' =>'Brand 01',
            'npwp'=>'123',
            'profil_pic_path'=>'profile01',
            'addres'=>'Karang Menjangan N0. 06',
            'phone_number'=>'088811',
            'website'=>'brand01.com',
            'province'=>'15',
            'category_id'=>'1',
        ],
        [
            'user_id' =>'brand02',
            'company_name' =>'Brand 02',
            'npwp'=>'122',
            'profil_pic_path'=>'Profile02',
            'addres'=>'Jambu No.12',
            'phone_number'=>'0822123',
            'website'=>'brand02.com',
            'province'=>'12',
            'category_id'=>'',
        ],
        [
            'user_id' =>'brand03',
            'company_name' =>'Brand 02',
            'npwp'=>'122',
            'profil_pic_path'=>'Profile02',
            'addres'=>'Jambu No.12',
            'phone_number'=>'0822123',
            'website'=>'brand02.com',
            'province'=>'12',
            'category_id'=>'',
        ],

    );
}
}
