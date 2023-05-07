<?php

namespace App\Http\Controllers;

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
    public function health1 ()
    {
        return view('player.faction of articl.health.health1');
    }
    public function health2 ()
    {
        return view('player.faction of articl.health.health2');
    }
    public function health3 ()
    {
        return view('player.faction of articl.health.health3');
    }
    public function health4 ()
    {
        return view('player.faction of articl.health.health4');
    }
    public function health5 ()
    {
        return view('player.faction of articl.health.health5');
    }
    public function article1 ()
    {
      return view('player.faction of articl.nutriting.article1');
    }
    public function article2 ()
    {
      return view('player.faction of articl.nutriting.article2');
    }
    public function article3 ()
    {
      return view('player.faction of articl.nutriting.article3');
    }
    public function article4 ()
    {
      return view('player.faction of articl.nutriting.article4');
    }
    public function article5 ()
    {
      return view('player.faction of articl.nutriting.article5');
    }
    public function tarticle2 ()
    {
      return view('player.faction of articl.training.article2');
    }
    public function tarticle1 ()
    {
      return view('player.faction of articl.training.article1');
    }
    public function tarticle3 ()
    {
      return view('player.faction of articl.training.article3');
    }
    public function tarticle4 ()
    {
      return view('player.faction of articl.training.article4');
    }
    public function tarticle5 ()
    {
      return view('player.faction of articl.training.article5');
    }
    public function health ()
    {
      return view('player.faction of articl.health');
    }
    public function nutrition ()
    {
      return view('player.faction of articl.nutrition');
    }
    public function training ()
    {
      return view('player.faction of articl.training');
    }
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
