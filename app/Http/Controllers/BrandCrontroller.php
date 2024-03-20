<?php

namespace App\Http\Controllers;
use App\Models\Province;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandCrontroller extends Controller
{
    public function index()
    {

        $provinces = Province::get(['id', 'name']);
        //$logged_in_user_id = auth()->user()->id;
        $brand_data = DB::table('brands')
                        ->join('provinces','provinces.id','=','brands.provinces_id')
                        ->join('categories','categories.id','=','brands.category_id')
                            ->get();

        $data =[
           'brand'=>$brand_data,
        ];
        return response()->json($data);
    }

    function store(){

    }
}
