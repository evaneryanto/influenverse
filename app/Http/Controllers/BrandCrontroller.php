<?php

namespace App\Http\Controllers;
use App\Models\Province;
use Illuminate\Http\Request;

class BrandCrontroller extends Controller
{
    public function index()
    {   

        $provinces = Province::get(['id', 'name']);
        $logged_in_user_id = auth()->user()->id;
        $data =[ 
            'provinces'=>$provinces,
            'user_id'=>$logged_in_user_id,

        ];
        return response()->json($data);
    }


    
     
}
