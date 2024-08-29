<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function saveImage($request,$name){
        if ($request->hasfile($name)) {
            # code...
            $image=$request->file($name);

            $publicPath=public_path("uploads");
            $image_name= time().$image->getClientOriginalName();
            $image->move($publicPath,$image_name);
            $request->image=$image_name;
            return $request->image;
        }
        return null;
    }
    public function index()
    {
        //
        $matches = Game::all();
        return view("admin.matches.index",compact("matches"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.matches.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        $request->validate([
            "teamHome"=>["required"],
            "teamAway"=>["required"],
            "homeLogo"=>["required"],
            "awayLogo"=>["required"],
            "stidume"=>["required"],
            "date"=>["required"],
            "comptition" =>["required"],
            "stage"=>["required"]
        ]);

        $game = new Game();
        $game->teamHome = $data["teamHome"];
        $game->teamAway = $data["teamAway"];
        $game->stidume = $data["stidume"];
        $game->matchTime = $data["date"];
        $game->compitation = $data["comptition"];
        $game->stage = $data["stage"];
        $request["homeLogo"] = $this->saveImage($request,"homeLogo");
        $request["awayLogo"] = $this->saveImage($request,"awayLogo");
        $game->teamHomeLogo = $data["homeLogo"];
        $game->teamAwayLogo = $data["awayLogo"];


        $game->save();

        return to_route("matches.index");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $game = Game::find($id);
        return view("admin.matches.show",compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($game)
    {
        //
        $data = Game::find($game);
        // dd($data);



        return view("admin.matches.update",compact("data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $game = Game::find($id);

        $data = $request->all();
        $request->validate([
            "teamHome"=>["required"],
            "teamAway"=>["required"],
            "homeLogo"=>["required"],
            "awayLogo"=>["required"],
            "stidume"=>["required"],
            "date"=>["required"],
            "comptition" =>["required"],
            "stage"=>["required"]
        ]);


        $game->teamHome = $data["teamHome"];
        $game->teamAway = $data["teamAway"];
        $game->stidume = $data["stidume"];
        $game->matchTime = $data["date"];
        $game->compitation = $data["comptition"];
        $game->stage = $data["stage"];
        $request["homeLogo"] = $this->saveImage($request,"homeLogo");
        $request["awayLogo"] = $this->saveImage($request,"awayLogo");
        $game->teamHomeLogo = $data["homeLogo"];
        $game->teamAwayLogo = $data["awayLogo"];

        $game->save();
        return to_route("matches.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //

        $game = Game::find($id);
        $game->delete();
        return to_route("matches.destroy",$id);
    }
}
