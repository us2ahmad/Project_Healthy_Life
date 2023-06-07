<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('coach.index');

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
    public function show(Coach $coach)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coach $coach)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coach $coach)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coach $coach)
    {
        //
    }

    public function pagearticle( )
    {
      return view('coach.addarticle');
    }
    public function addarticle(Request $request)
    {
        $request->validate([
            'title' =>'required',
            'type' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image_path' => 'required',
        ]);
        $art=new Article();
        $art->title=$request->title;
        $art->type=$request->type;
        $art->description=$request->description;
        $art->content=$request->content;
        $art->image_path=$request->file('image_path')->store('uploadfile','ahmad');
        $art->id_coache=auth()->user()->coach->id;
        $art->save();
        return redirect()->back();
    }

    public function addplans(){
        return view('coach.addtrainingplanning');
    }

    public function addadvice (){
       return view('coach.addadvice');
    }
    public function update_trainer (){
        return view('coach.update trainer');
     }

     public function updatecontent (){
        return view('coach.updatecontent');
     }
     public function updateplanning (){
        return view('coach.updateplanning');
     }
     public function viewcontent (){
        return view('coach.viewcontent');
     }
     public function viewplannings (){
        return view('coach.viewplannings');
     }
     public function viewplayers (){
        return view('coach.viewplayers');
     }
     public function viewviolations (){
        return view('coach.viewviolations');
     }
     public function violation (){
        return view('coach.violation');
     }
     public function viewplan (){
        return view('coach.viewplannings');
     }

}
