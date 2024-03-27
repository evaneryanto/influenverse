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
                        ->join('provinces','provinces.id','=','brands.province_id')
                        ->join('category_brand','category_brand.brand_id','=','brands.user_id')
                        ->join('categories','categories.id','=','category_brand.category_id')
                            ->select('brands.company_name','brands.npwp','brands.addres','brands.phone_number','brands.website','brands.profil_pic_path','provinces.name as province','categories.name as brand_category')
                                ->get();

        $data =[
            'status' => true,
            'message' => "data ditemukan",
            'data'  => $brand_data,
        ];
        return response()->json($data);
    }

    function store(Request $request){

        $profile_pict_path = "";

        if($request->hasFile('profile_picture_path')){
            $file = $request->file('profile_picture_path');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/profile_picture', $image_name);
            $profile_pict_path = 'storage/profile_picture/' . $image_name;
        }


        $brand = new Brand();
        $brand->user_id = $request->user_id;
        $brand->company_name = $request->company_name;
        $brand->npwp = $request->npwp;
        $brand->addres = $request->addres;
        $brand->phone_number = $request->phone_number;
        $brand->website = $request->website;
        $brand->profil_pic_path = $profile_pict_path;
        $brand->province_id = $request->province_id;

        $brand->save();

        //dd($request);

        $data = [
            'status' => true,
            'message' => 'data berhasil diisi',
        ];
        return response()->json($data);


    }

    function update(Request $request, $id){

        $profile_pict_path = "";

        if($request->hasFile('profile_picture_path')){
            $file = $request->file('profile_picture_path');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/profile_picture', $image_name);
            $profile_pict_path = 'storage/profile_picture/' . $image_name;
        }

        //$brand_data = $request->all();
        $brand = Brand::find($id);

        $brand->user_id = $request->user_id;
        $brand->company_name = $request->company_name;
        $brand->npwp = $request->npwp;
        $brand->addres = $request->addres;
        $brand->phone_number = $request->phone_number;
        $brand->website = $request->website;
        $brand->profil_pic_path = $profile_pict_path;
        $brand->province_id = $request->province_id;

        $brand->update();

        $data = [
            'status' => true,
            'message' => "data berhasil diubah",
        ];
        return response()->json($data);
    }
}
