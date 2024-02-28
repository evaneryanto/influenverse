<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\User;
use App\Models\Influencer;

class InfluencerProfileController extends Controller
{
    public function index()
    {   
        $provinces = Province::get(['id', 'name']);
        $user_id = auth()->user()->id;
        // dd($user_id);
        $influencer = Influencer::where('user_id', $user_id)->first();
        // dd($influencer);
        return view('fill_profile', compact('provinces', 'influencer', 'user_id'));
    }


    public function store (Request $request) 
    {
        $influncer = Influencer::create([
            'user_id' => $request->user_id,
            'province_id' => $request->province_id,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'about_me' => $request->about_me,
            'address' => $request->address,
            'is_married' => $request->is_married,
            'phone_number' => $request->phone_number,
            'profile_picture_path' => $request->profile_picture_path
        ]);

        return redirect('/dashboard');

    }
        
}
