<?php

namespace App\Http\Controllers;

use App\Models\Manger;
use App\Models\User;
use App\Models\Coach;
use App\Models\Advice;
use App\Models\Article;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
       // $adv->photo = $request->file('photo')->getClientOriginalName();
        $adv->photo = $request->file('photo')->store('uploadfile','ahmad');
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


    public function accept_coach()
    {
        $look=Coach::where('approved','look')
            ->with('user')
            ->get();
        return view('admin.ac-coach',compact('look'));
    }
    public function acc_coach($id)
    {
        $look=Coach::where('id',$id)->first();
        $look->approved='unlook';
        $look->save();
        return redirect()->back();

    }

 
    public function viewcoash(){

    // $coaches = User::with('coach')->where('account_type', 'coach')->get();
    $coaches=  User::with('coach')->where('account_type', 'coach')
                ->whereHas('coach', function ($query) {
                    $query->where('ban','unbanned')->where('approved','unlook');
                })
                ->get();
        return view('admin.view-coach',compact('coaches'));
    }
    
    public function viewplayer()
    {

        $players = User::with('player')->where('account_type', 'player')
                    ->whereHas('player',function($query){
                     $query->where('ban','unbanned');})
                     ->get();
                   
            return view('admin.view-player',compact('players'));
    }
    public function view_player_ban()
    {
        $bans=Player::with('user')->where('ban','banned')->get();
        return view('admin.view-ban-player',compact('bans'));
    }
    public function view_coach_ban()
    {
        $bans=Coach::with('user')->where('ban','banned')->get();
        return view('admin.view-ban-coach',compact('bans'));
    }
    public function coach_ban($id)
    {
        $coach=Coach::where('user_id',$id)->first();
        $coach->ban='banned';
        $coach->save();
        return redirect()->back();      
    }

    public function coach_unban($id)
    {
        $coach=Coach::where('id',$id)->first();
        $coach->ban='unbanned';
        $coach->save();
        return redirect()->back();      
    }

    public function player_ban($id)
    {
        $player=Player::where('user_id',$id)->first();
        $player->ban='banned';
        $player->save();
        return redirect()->back();      
    }

    public function player_unban($id)
    {
        $player=Player::where('id',$id)->first();
        $player->ban='unbanned';
        $player->save();
        return redirect()->back();      
    }


}
