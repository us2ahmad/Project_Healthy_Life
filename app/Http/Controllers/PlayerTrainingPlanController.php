<?php

namespace App\Http\Controllers;

use App\Mail\CoachAddTrain;
use App\Models\Coach;
use App\Models\Content;
use App\Models\Player;
use App\Models\Player_Training_Plan;
use App\Models\Training_Plan;
use App\Models\User;
use App\Traits\QueryTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

 
class PlayerTrainingPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
use QueryTrait;
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
        // dd('d');

        if($tr_plan->isNotEmpty())
        {
            // dd('aa');
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
        if($tr_plan->isEmpty())
        {
            $coach = Coach::where('id', $coachid)->first();
            $mailcoach = User::where('id', $coach->user_id)->first();
            Mail::to($mailcoach->email)->send(new CoachAddTrain($player->weight, $player->height));
            return view('player.response-train');
        }
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
    
///////nassssssssser//////
//  public function type()
// {
//     $id = DB::table('player_training_plans')
//         ->where('id_player', auth()->user()->player->id)
//         ->pluck('id_training_plan');
//     $contents_id = DB::table('contents_training_plans')
//         ->whereIn('id_training_plan', $id)
//         ->pluck('id_content');
//     foreach ($contents_id as $content_id)
//     {
//         $contents = DB::table('contents')->whereIn('id', $contents_id)
//             ->get();
//     }
//     return $contents->toArray();
// }
/////nassssssssser//////

///////nassssssssser//////
public function ShowType()
{
    // dd( arr_type() );
    $contents =$this->arr_type();

    if($contents != null){
        return view('player.fcation.plans.plan1.plan',compact('contents'));
    }
    else
    {
        $respo='NoT A Plan';
        return view('player.response',compact('respo'));
    }

}
public function Showexsersize($type)
{
          
      
           
    // dd($type , auth()->user()->player->id);
    
     $plan_id =   DB::table('player_training_plans')
        ->where('id_player' ,auth()->user()->player->id )
        ->where('status' ,'active' )
        ->pluck('id_training_plan');

        $contents_id = DB::table('contents_training_plans')
        ->whereIn('id_training_plan', $plan_id )
        ->pluck('id_content');  
        $contents = DB::table('contents')
        ->where('type', $type )
        ->get(); 
        
        dd($contents);
    return view('player.fcation.plans.plan1.exsersize.exsersize',compact('conts','type'));
}
public function get_plan()
{
    $id = Auth::user()->id;
    if($id!=null)
    {
        $contents =$this->arr_type();
        if($contents != null)
        {
            return view('player.fcation.plans.plan1.plan',compact('contents'));
        }
        else
        {
            $respo='You don`t have a plan';
            return view('player.response',compact('respo'));
        }
    }
    else
    {
        return redirect()->route('login');
    
    }
}
}
///////nassssssssser//////


