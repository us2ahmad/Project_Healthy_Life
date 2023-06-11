<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Coach;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */


    // public function create(Request $request)
    // {
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'type' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'content' => 'required|string|max:255',
        //     'image_path' => 'required|string',
        // ]);
    //     $art=new Article();
    //     $art->title=$request->title;
    //     $art->type=$request->type;
    //     $art->description=$request->description;
    //     $art->content=$request->content;
    //     $art->image_path=$request->image_path;
    //     $art->id_coache=auth()->user()->id;
    //     $art->save();
    //     return redirect()->back();
    // }
    

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
    // public function show(article $article)
    // {
    //   return view('coach.addarticle');
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $art=Article::where('id',$id)->first();
        return view('coach.edit-article',compact('art')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
     
        $request->validate([
                'title' => 'required|string|max:255',
                'type' => 'required|string|max:255',
                'description' => 'required|string',
                'content' => 'required|string|max:255',
                'image_path'=>'required',
                ]);
        $articel=Article::where('id',$id)->first();
        $articel->type =$request->type;
        $articel->title =$request->title;
        $articel->description =$request->description;
        $articel->content =$request->content; 
        $articel->image_path =$request->file('image_path')->store('article','ahmad');
        $articel->save();
        return redirect()->route('coach.view.article')->with('success','Modified successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $advice=Article::find($id)->first();
        $advice->delete();
        return redirect()->back()->with('success','Done Deleting');
    }
    public function Nutrition ()
    {
        // $nutrition = Article::where('type', 'nutrition')
        // ->join('coaches', 'articles.id_coache', '=', 'coaches.id')
        // ->join('users', 'coaches.user_id', '=', 'users.id')
        // ->select('articles.*', 'users.first_name', 'users.last_name')
        // ->get();
        $nutrition = Article::select('articles.*', 'users.first_name', 'users.last_name')
        ->join('coaches', 'articles.id_coache', '=', 'coaches.id')
        ->join('users', 'coaches.user_id', '=', 'users.id')
        ->where('articles.type', '=', 'nutrition')
        ->get();

      return view('player.articl.nutrition',compact('nutrition'));
    }

    public function Training ()
    {
        // $training = Article::where('type', 'training')
        // ->join('coaches', 'articles.id_coache', '=', 'coaches.id')
        // ->join('users', 'coaches.user_id', '=', 'users.id')
        // ->select('articles.*', 'users.first_name', 'users.last_name')
        // ->get();
        $training = Article::select('articles.*', 'users.first_name', 'users.last_name')
    ->join('coaches', 'articles.id_coache', '=', 'coaches.id')
    ->join('users', 'coaches.user_id', '=', 'users.id')
    ->where('articles.type', '=', 'training')
    ->get();
      return view('player.articl.training',compact('training'));
    }
    public function Health ()
    { 
    //     $health = Article::where('type', 'health')
    //     ->join('coaches', 'articles.id_coache', '=', 'coaches.id')
    //     ->join('users', 'coaches.user_id', '=', 'users.id')
    //     ->select('articles.*', 'users.first_name', 'users.last_name')
    //     ->get();
    $health = Article::select('articles.*', 'users.first_name', 'users.last_name')
    ->join('coaches', 'articles.id_coache', '=', 'coaches.id')
    ->join('users', 'coaches.user_id', '=', 'users.id')
    ->where('articles.type', '=', 'health')
    ->get();
    return view('player.articl.health',compact('health'));
    }
    //////////////////////////////
    public function ShowArticle($type,$id){
        $artic = Article::where('id', $id)->where('type', $type)->first();
    
        
        // dd($artic);
        if(!$artic){
    return abort(404);
        }
        else
        {
        return view('player.articl.show_art',compact('artic'));
    }
    }

   
}
