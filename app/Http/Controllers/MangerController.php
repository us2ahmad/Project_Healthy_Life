<?php

namespace App\Http\Controllers;

use App\Models\Manger;
use Illuminate\Http\Request;

class MangerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');
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
    public function show(Manger $manger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manger $manger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manger $manger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manger $manger)
    {
        //
    }
    public function addadvice(){

        return view('admin.addadvice');
    }
    public function addarticle(){

        return view('admin.addarticle');
    }
    public function addtrainer(){

        return view('admin.addtrainer');
    }
    public function addviolations(){

        return view('admin.addviolations');
    }
    public function calc(){

        return view('admin.calc');
    }
    // public function chat(){

    //     return view('admin.chat');

    // }

    public function imports(){

        return view('admin.imports');
        
    }
    public function payments(){

        return view('admin.payments');
        
    }
    
    public function replycomplaint(){

        return view('admin.replycomplaint');
        
    }
    public function updateplayer(){

        return view('admin.updateplayer');
        
    }
    public function updatetrainer(){

        return view('admin.updatetrainer');
        
    }
    public function updateviolation(){

        return view('admin.updateviolation');
        
    }
    public function viewbannings(){

        return view('admin.viewbannings');
        
    }
    public function viewtrainer(){

        return view('admin.viewtrainer');
        
    }
    public function viewviolations(){

        return view('admin.viewviolations');
        
    }
    public function violations(){

        return view('admin.violations');
        
    }

}
