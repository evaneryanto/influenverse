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


    // public function store (InfluencerBioRequest $request)
    // {
    //     try {
    //         $categories = $request->input('categories');

    //         $profile_pict_path = null;
    
    //         if($request->hasFile('profile_picture_path')){
    //             $file = $request->file('profile_picture_path');
    //             $image_name = time() . '.' . $file->getClientOriginalExtension();
    //             $file->storeAs('public/profile_picture', $image_name);
    //             $profile_pict_path = 'storage/profile_picture/' . $image_name;
    //         }

    //         DB::beginTransaction();
            
    //         $influncer = Influencer::create([
    //             'user_id' => $request->user_id,
    //             'province_id' => $request->province_id,
    //             'birth_date' => $request->birth_date,
    //             'gender' => $request->gender,
    //             'about_me' => $request->about_me,
    //             'address' => $request->address,
    //             'is_married' => $request->is_married,
    //             'phone_number' => $request->phone_number,
    //             'profile_picture_path' => $profile_pict_path
    //         ]);
    
    //         $influncer->categories()->attach($categories);

    //         DB::commit();
    
    //         // return redirect('/dashboard');
    
    //         return response()->json($influncer);

    //     } catch(\Throwable $th) {
    //         DB::rollBack();
    //         return response()->json($th->getMessage());
    //     }
     
}
