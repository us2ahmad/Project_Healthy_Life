<?php

namespace App\Http\Controllers;

use App\Models\Manger;
use App\Models\User;
use App\Models\Coach;
use App\Models\Advice;
use App\Models\Article;
use Illuminate\Http\Request;


class MangerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index(){
    return view('admin.index');
}


      public function peagadvice(){
      return view('admin.addadvice');
      }
    public function addadvice(Request $request)
    {
        $adv = new Advice();
        $adv->desc = $request->desc;
        $adv->photo = $request->photo;
        $adv->save();
    
        return redirect()->back();
    }
    public function showAdvices()
    {
        $advices = Advice::all();

        return view('admin.view-advices', compact('advices'));
    }

    public function showarticle()
    {
        $articles = Article::all();

        return view('admin.view-article', compact('articles'));
    }

   
    public function addcoach(){

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


 
    public function viewcoash(){

    $coaches = User::with('coach')->where('account_type', 'coach')->get();
        return view('admin.view-coach',compact('coaches'));
    }
    
    public function viewplayer(){

        $players = User::with('player')->where('account_type', 'player')->get();
            return view('admin.view-player',compact('players'));
        }
        


}
