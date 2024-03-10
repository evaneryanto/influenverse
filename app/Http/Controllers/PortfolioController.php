<?php

namespace App\Http\Controllers;

use App\Models\Influencer;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\InfluencerPortfolioRequest;

class PortfolioController extends Controller
{
    public function index()
    {
        $logged_in_user_id = auth()->user()->id;
        $influencer_id = Influencer::where('user_id', $logged_in_user_id)->first();

        if($influencer_id == null){
            return response()->json(['portfolio' => null]);
        }

        $portfolio = Portfolio::where('influencer_id', $influencer_id->id)->get();


        $data = [
            'portfolio' => $portfolio
        ];

        return response()->json($data);
        

    }

    public function store(InfluencerPortfolioRequest $request)
    {
        $portfolio = Portfolio::create([
            'influencer_id' => $request->influencer_id,
            'name' => $request->name,
            'description' => $request->description,
            'platform' => $request->platform,
            'url' => $request->url
        ]);
        return response()->json($portfolio);

    }

    public function update(InfluencerPortfolioRequest $request, string $id)
    {
        if($request->user()->cannot('check_influencer')){
            return response()->json(['message' => 'Can be accesd only by influencer'], 401);
        }

        $portfolio = Portfolio::find($id);
        $influencer_creator = Influencer::find($portfolio->influencer_id);
        
        if(! Gate::allows('influencer_authorization', $influencer_creator)){
            return response()->json(['message' => 'You are not owner of this portfolio. Can be updated only by the owner.'], 403);
        }

        $portfolio->update([
            'influencer_id' => $request->influencer_id,
            'name' => $request->name,
            'description' => $request->description,
            'platform' => $request->platform,
            'url' => $request->url
        ]);

        return response()->json($portfolio);
    }

    public function edit(Request $request){

    }

    public function destroy(string $id)
    {
        $portfolio = Portfolio::find($id);
        
        $influencer_creator = Influencer::find($portfolio->influencer_id);
        
        if(! Gate::allows('manage_portfolio', $influencer_creator)){
            return response()->json(['message' => 'You are not owner of this portfolio. Can be deleted only by the owner.'], 403);
        }

        $portfolio->delete();

        return "succcessfully deleted portfolio with id $id";
    }
}
