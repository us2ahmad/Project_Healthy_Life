<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return 1;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        //
    }
    // public function balding_body_team ()
    // {
    //     return view('player');
    // }
    // public function prof(Request $request){
    //   if ( auth()->user()->player->user_id == auth()->user()->id){
    //     $player = Player::find(auth()->user()->id);
    //       // تحديد قيمة العمود "user_id"
    //       // $player->user_id=auth()->user()->id;
    //        $player->height = $request->height;
    //        $player->weight = $request->weight;
    //        $player->save();
    //        return view('player.aa',compact('player'));
    //   }
    //   else return 0;
    // }
   
  
    public function plans ()
    {
      return view('player.fcation.plans.plan1.plan');
    }
    public function balding_body_team ()
    {
      return view('player.fcation.balding-body-team');
    }
    public function blabla ()
    {
      return view('player.fcation.blabla');
    }
    public function fitness_team ()
    {
      return view('player.fcation.fitness-team');
    }
    public function exsersize ()
    {
      return view('player.fcation.plans.plan1.exsersize.exsersize');
    }

    public function athartrachel(){
      return view('player.fcation.blabla');
    }



}
