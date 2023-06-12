<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Content_Training_Plan;
use App\Models\Training_Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrainingPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function addplan(Request $request)
    {
    //  $tp =new Training_Plan();
    //     $tp->goal=$request->goal;
    //     $tp->duration=$request->duration;
    //     $tp->min_high=$request->min_high;
    //     $tp->max_high=$request->max_high;
    //     $tp->min_weight=$request->min_weight;
    //     $tp->max_weight=$request->max_weight;
    //     $tp->id_coache= auth()->user()->coach->id;
    //     $tp->save();

    // $request->validate([
    //     'goal' =>'required|string',
    //     'duration' => 'required|numeric|min:1',
    //     'min_high' => 'required|numeric|max:3|min:1',
    //     'max_high' => 'required|numeric|max:3|min:1',
    //     'min_weight' => 'required|numeric|max:3|min:1',
    //     'max_weight' => 'required|numeric|max:3|min:1',
    // ]);
    // dd($request);
    $plan  = DB::table('training_plans')->insertGetId([
           'goal' => $request->goal,
            'duration' => $request->duration,
            'min_high' => $request->min_high,
            'max_high' =>$request->max_high,
            'min_weight' => $request->min_weight,
            'max_weight' => $request->max_weight,
            'id_coache' =>  auth()->user()->coach->id, 
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now(),
            ]);
            return redirect()->route('coach.add.trin'  ,compact('plan') );
    }

   public function addtrin($plan)
    {   
        $coach   = DB::table('training_plans')->where('id'  , $plan )->get('id_coache');
        $coachid= $coach[0]->id_coache;
        $content=Content::where('id_coache',$coachid )->get();

        return view('coach.addcontent-to-plan',compact('content','plan'));
        
        // dd( $content);
        // $coach=auth()->user()->coach->id;
        // $cont=Content::where('id_coache', $coach)->get();
        // dd($cont);
       
    }

    public function saveplan($planid ,Request $request)
    {
        DB::table('contents_training_plans')->insert([
            
            'id_content'=>$request->dsa,
            'id_training_plan'=>$planid,
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now(),
        ]);

              return redirect()->back();
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
    public function show(Training_Plan $training_Plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Training_Plan $training_Plan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Training_Plan $training_Plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Training_Plan $training_Plan)
    {
        //
    }
}
