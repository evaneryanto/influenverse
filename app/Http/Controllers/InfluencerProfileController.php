<?php

namespace App\Http\Controllers;

use App\Models\Influencer;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class InfluencerProfileController extends Controller
{
   public function edit(Request $request) : View
    {   
        $user = [
            'id' => $request->user()->id,
            'username' => $request->user()->username,
            'name' => $request->user()->name,
            'role' => $request->user()->role,
            'year_created' => Carbon::createFromFormat('Y-m-d H:i:s', $request->user()->created_at)->format('Y')
        ];


        $influencer  = Influencer::where('user_id', $request->user()->id)->first();

        return view('profile.edit', compact('influencer', 'user'));
    }
}
