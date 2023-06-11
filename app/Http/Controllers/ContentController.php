<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function addcontent (Request $request){
       

        $request->validate([
           'title' =>'required|string|min:5|max:150',
           'type' => 'required|string',
           'description' => 'required|string|max:1000',
           'link' => 'required',
       ]);
       //    dd($request);
       $cont=new Content();
       $cont->id_coache=auth()->user()->coach->id;
       $cont->title=$request->title;
       $cont->type=$request->type;
       $cont->description=$request->description;
        $cont->link = $request->file('link')->store('content','ahmad');
       $cont->save();

   //  DB::table('contents')->insert([
   //        'title' => $request->title,
   //         'type' => $request->type,
   //         'description' => $request->description,
   //         'link' => $request->file('link')->store('content','ahmad'),
   //         'id_coache' => auth()->user()->coach->id,
   //         'created_at' => time(),
   //         'updated_at' => time(),   
   // ]);
       return redirect()->back()->with('success' ,'content added');
    }

    public function view_content()
    {
        $coach=auth()->user()->coach->id;
        $content=Content::where('id_coache',$coach)->get();
        return view('coach.view-content',compact('content'));
    }

    public function delet_content($id)
    {
        // $coach=auth()->user()->coach->id;
        $content=Content::find($id)->first();
        $content->delete();
        return redirect()->back()->with('success','Done Deleting');
    }
    public function edit_content($id)
    {
        $content=Content::find($id)->first();
        return view('coach.edit-content',compact('content'));

    }
    public function update_content(Request $request,$id)
    {

        $request->validate([
            'title' =>'required|string|min:5|max:150',
            'type' => 'required|string',
            'description' => 'required|string|max:1000',
            'link' => 'required',
        ]);
        $content=Content::find($id)->first();
        $content->title=$request->title;
        $content->type=$request->type;
        $content->description=$request->description;
        $content->link = $request->file('link')->store('content','ahmad');
        $content->save();
        // return 'Done';
        return redirect()->route('coach.view.content')->with('success','Modified successfully');




    }

}
