<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\Manger;
use App\Models\User;
use App\Models\Coach;
use App\Models\Advice;
use App\Models\Article;
use App\Models\Player;
use App\Traits\QueryTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MangerController extends Controller
{
    use QueryTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $count = $this->getCountRequestCouach();
        return view('admin.index', compact('count'));
    }

    public function peagadvice()
    {
        $count = $this->getCountRequestCouach();
        return view('admin.addadvice', compact('count'));
    }

    public function addadvice(Request $request)
    {
        $adv = new Advice();
        $adv->desc = $request->desc;
       // $adv->photo = $request->file('photo')->getClientOriginalName();
        $adv->photo = $request->file('photo')->store('advice','ahmad');
        $adv->save();
        return redirect()->back()->with('success','Done Add');
    }


    public function showAdvices()
    {
        $advices = Advice::all();
        $count = $this->getCountRequestCouach();
        return view('admin.view-advices', compact('advices', 'count'));
    }

    public function showarticle()
    {
        $articles = Article::all();
        $count = $this->getCountRequestCouach();
        return view('admin.view-article', compact('articles', 'count'));
    }


    public function addcoach()
    {
        $count = $this->getCountRequestCouach();
        return view('admin.addtrainer', compact('count'));
    }


   
    public function calc()
    {
        $count = $this->getCountRequestCouach();
        return view('admin.calc', compact('count'));
    }

    public function imports()
    {
        $count = $this->getCountRequestCouach();
        return view('admin.imports', compact('count'));
    }

      public function payments()
    {
        $count = $this->getCountRequestCouach();
        return view('admin.payments', compact('count'));
    }

    public function replycomplaint()
    {
        $count = $this->getCountRequestCouach();
        return view('admin.replycomplaint', compact('count'));
    }

    public function updateplayer()
    {
        return view('admin.updateplayer');
    }
       public function accept_coach()
    {

        $look = Coach::where('approved', 'look')
            ->with('user')
            ->get();
        $count = $this->getCountRequestCouach();
        return view('admin.ac-coach', compact('look', 'count'));
    }

      public function acc_coach($id)
    {
        // dd('acc_coach');
        $look = Coach::where('id', $id)->first();
        $user = User::where('id', $look->user_id)->first();
        $look->approved = 'unlook';
        $look->save();

        Mail::to($user->email)->send(new WelcomeMail($user->name, 'coach', 'You Become Coach ?? We Accept on your Request'));

        return redirect()->back()->with('success', 'Done');
    }

    public function viewcoash()
    {

        // $coaches = User::with('coach')->where('account_type', 'coach')->get();
        $coaches =  User::with('coach')->where('account_type', 'coach')
            ->whereHas('coach', function ($query) {
                $query->where('ban', 'unbanned')->where('approved', 'unlook');
            })
            ->get();

        $count = $this->getCountRequestCouach();
        return view('admin.view-coach', compact('coaches', 'count'));
    }

    public function dis_acc_coach($id)
    {
        // dd('dis_acc_coach');
        $look = Coach::where('id', $id)->first();
        $user = User::where('id', $look->user_id)->first();
        $user->delete();
        // $look->approved = 'un_accept';
        // $look->save();
        Mail::to($user->email)->send(new WelcomeMail($user->name, 'coach', 'You Reject ?? We Un Accept on your Request ??Sorry Try Again'));

        return redirect()->back()->with('success', 'Done');
    }



    public function viewplayer()
    {

        $players = User::with('player')->where('account_type', 'player')
            ->whereHas('player', function ($query) {
                $query->where('ban', 'unbanned');
            })
            ->get();
        $count = $this->getCountRequestCouach();
        return view('admin.view-player', compact('players', 'count'));
    }
    public function view_player_ban()
    {
        $bans = Player::with('user')->where('ban', 'banned')->get();
        $count = $this->getCountRequestCouach();
        return view('admin.view-ban-player', compact('bans', 'count'));
    }

     public function view_coach_ban()
    {
        $bans = Coach::with('user')->where('ban', 'banned')->get();
        $count = $this->getCountRequestCouach();
        return view('admin.view-ban-coach', compact('bans', 'count'));
    }

    public function coach_ban($id)
    {
        $coach = Coach::where('user_id', $id)->first();
        $coach->ban = 'banned';
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
