<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfluencerBioRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;
use App\Models\Province;
use App\Models\Influencer;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class InfluencerBioController extends Controller
{
    public function index()
    {
        $provinces = Province::get(['id', 'name']);
        $logged_in_user_id = auth()->user()->id;
        $user_data = DB::table('users')->where('id', $logged_in_user_id)->select('id', 'name', 'username', 'created_at')->first();
        $influencer = Influencer::where('user_id', $logged_in_user_id)->first();

        if($influencer == null){
            $categories = Category::get(['id', 'name']);
            $data = [
                'provinces' => $provinces,
                'influencer' => $influencer,
                'user_data' => $user_data,
                'categories' => $categories
            ];
            return response()->json($data);
        }

        $categories = DB::table('categories')
                    ->join('category_influencer', 'categories.id', '=', 'category_influencer.category_id')
                    ->where('category_influencer.influencer_id', $influencer->id)
                    ->select('categories.id', 'categories.name')
                    ->get();

        $data = [
            'provinces' => $provinces,
            'influencer' => $influencer,
            'user_data' => $user_data,
            'categories' => $categories
        ];

        return response()->json($data);

        // return view('fill_profile', $data);

    }


    public function store (InfluencerBioRequest $request)
    {
        try {
            $categories = $request->input('categories');

            $profile_pict_path = null;

            if($request->hasFile('profile_picture_path')){
                $file = $request->file('profile_picture_path');
                $image_name = time() . '.' . $file->getClientOriginalExtension();
                $file->storeAs('public/profile_picture', $image_name);
                $profile_pict_path = 'storage/profile_picture/' . $image_name;
            }

            DB::beginTransaction();

                $influncer = Influencer::create([
                'user_id' => $request->user_id,
                'province_id' => $request->province_id,
                'birth_date' => $request->birth_date,
                'gender' => $request->gender,
                'about_me' => $request->about_me,
                'address' => $request->address,
                'is_married' => $request->is_married,
                'phone_number' => $request->phone_number,
                'profile_picture_path' => $profile_pict_path
            ]);

            $influncer->categories()->attach($categories);

            DB::commit();

            // return redirect('/dashboard');

            return response()->json($influncer);

        } catch(\Throwable $th) {
            DB::rollBack();
            return response()->json($th->getMessage());
        }


    }


    public function update (InfluencerBioRequest $request, string $id){
        try {

        $categories = $request->input('categories');

        $influencer = Influencer::find($id);

        if(! Gate::allows('influencer_authorization', $influencer)){
            return response()->json(['message' => 'You are not owner of this influencer data. Can be updated only by the owner.'], 403);
        }
        $user = User::find($influencer->user_id);

        $profile_picture_path = $influencer->profile_picture_path;

        if($request->hasFile('profile_picture_path')){
            $file = $request->file('profile_picture_path');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/profile_picture', $image_name);

            $old_file_name = basename($profile_picture_path);

            Storage::delete('public/profile_picture/' . $old_file_name);

            $profile_picture_path = 'storage/profile_picture/' . $image_name;
        }

        DB::beginTransaction();

        $influencer->categories()->sync($categories);

        $user->update([
            'name' => $request->name
        ]);

        $influencer->update([
            'user_id' => $request->user_id,
            'province_id' => $request->province_id,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'about_me' => $request->about_me,
            'address' => $request->address,
            'is_married' => $request->is_married,
            'phone_number' => $request->phone_number,
            'profile_picture_path' => $profile_picture_path
        ]);

        DB::commit();

        return response()->json($influencer);


        } catch(\Throwable $th) {
            DB::rollBack();
            return response()->json($th->getMessage());
        }

    }

    public function  destroy(string $id)
    {

        $influencer = Influencer::find($id);

        if(! Gate::allows('influencer_authorization', $influencer)){
            return response()->json(['message' => 'You are not owner of this influencer data. Can be deleted only by the owner.'], 403);
        }

        $influencer->categories()->detach();
        $profile_picture_path = $influencer->profile_picture_path;
        $old_file_name = basename($profile_picture_path);

        Storage::delete('public/profile_picture/' . $old_file_name);
        $influencer->delete();
        return "succcess deleted influencer with id $id";
    }




}
