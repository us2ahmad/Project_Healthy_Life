<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Coach;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plan = DB::table('training_plans')->where('id_coache',auth()->user()->coach->id)->get();
        $players=Player::where('id_coache',auth()->user()->coach->id)->get();
        return view('coach.index',compact('players','plan'));

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
        $art->image_path=$request->file('image_path')->store('article','ahmad');
        $art->id_coache=auth()->user()->coach->id;
        $art->save();
        return redirect()->back();
    }
    public function view_article()
    {
        $coach=auth()->user()->coach->id;
        $articles=Article::where('id_coache', $coach)->get();
        return view('coach.view-article',compact('articles'));

    }
     public function view_players (){
        $players=Player::where('id_coache',auth()->user()->coach->id)->get();
        return view('coach.view-players',compact('players'));
     }
    public function view_plan ()
    {
        $plans = DB::table('training_plans')->where('id_coache',auth()->user()->coach->id)->get();
        return view('coach.view-plan',compact('plans'));
     }

}
