<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Coach;
use App\Models\Player;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
   
    // public function plans(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'weight' => 'required|numeric|min:1|max:500',
    //         'height' => 'required|numeric|min:1|max:300',
    //     ]);
    
    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }
    
    //     // Do something with the weight and height values, such as storing them in the database or calculating a plan based on them
    
    //     return view();
    // }
    public function plans(){
        return view('player.fcation.plans.plan1.plan');
    }

    public function exsersize ()
    {
      return view('player.fcation.plans.plan1.exsersize.exsersize');
    }

   
public function team($type){
  $coach=Coach::where('type',$type)->where('approved','unlook')->get();
    

  return view('player.fcation.team',compact('coach'));
}


}
