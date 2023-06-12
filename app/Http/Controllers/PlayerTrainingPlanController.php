<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Player_Training_Plan;
use App\Models\Training_Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlayerTrainingPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function add_tr(Request $request)
     {
        $playerid=auth()->user()->player->id;
        $player=Player::find($playerid);
        $player->height=$request->height;
        $player->weight=$request->weight;
        $player->save();
        $coachid=$request->id_coach;
        $tr_plan=DB::table('training_plans')->where('id_coache',$coachid)
        ->where('min_high','<=' ,$request->height)
        ->where('max_high','>=' ,$request->height)
        ->where('min_weight','<=' ,$request->weight)
        ->where('max_weight','>=' ,$request->weight)
        ->where('goal',$request->goal)
        ->get();

        if($tr_plan->isNotEmpty())
        {
            $trid=  $tr_plan[0]->id;
            return view('player.sendpyment',compact('trid'));
                }
            //     // DB::table('player_training_plans')->insert([
        //     //         'status'=>'unactive',
        //     //         'id_player'=> $playerid,
        //     //         'id_training_plan'=>$tr_plan[0]->id,
        //     //         'created_at	'=>now(),
        //     //         'updated_at'=>now(),
        //     //     ]);
        // }
        
  
     }

    public function index()
    {
     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Player_Training_Plan $player_Training_Plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player_Training_Plan $player_Training_Plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player_Training_Plan $player_Training_Plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player_Training_Plan $player_Training_Plan)
    {
        //
    }
}
