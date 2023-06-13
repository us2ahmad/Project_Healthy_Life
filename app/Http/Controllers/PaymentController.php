<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Player;
use App\Traits\QueryTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    use QueryTrait;

    public function index($approved)
    {
        $count = $this->getCountRequestCouach();
        $payments=Payment::where('approved',$approved)->get();
        return view('admin.payments',compact('payments','count'));
    }
    public function accept_payment($id,$id_player)
    {
        $payment=Payment::where('id',$id)->first();
        $payment->approved='accept';
        $payment->save();
        $trid= $payment->id_training_plans;
        $duration = DB::table('training_plans')->where('id', $trid)->value('duration');
        $coachid = DB::table('training_plans')->where('id', $trid)->value('id_coache');
        DB::table('player_training_plans')->insert([
            'status' => 'active',
            'id_player' => $id_player,
            'id_training_plan' => $trid,
            'sdate'=> now()->format('Y-m-d H:i:s'),
            'edate'=>now()->addDays($duration),
            'created_at' => now()->format('Y-m-d H:i:s'),
            'updated_at' => now()->format('Y-m-d H:i:s'),
        ]);
        $player=Player::where('id',$id_player)->first();
        $player->id_coache= $coachid;
        $player->save();
        return redirect()->back()->with('success','Payment accepted');
    }

    public function add_payment(Request $request)
    {
    //   dd($request ,'ii');
    //  return view('player.sendpyment');
    //      dd($request);
    //   $payment = new Payment();
    //   $payment->phone_number= $request->phone_number;
    //   $payment->id_training_plans =$request->trid;
    //   $payment->id_player= auth()->user()->player->id;
    //   $payment->save();

    // dd($request);
    DB::table('payments')->insert([
        'approved' => 'unaccept',
        'id_player' => auth()->user()->player->id,
        'id_training_plans' =>$request->trid,
        'phone_number' => $request->phone_number,
        'created_at' => now()->format('Y-m-d H:i:s'),
        'updated_at' => now()->format('Y-m-d H:i:s'),
    ]);

    $resp='We are now giving you the appropriate plan';
    return view('player.response',compact('resp'));
    
    }
  
    public function show(Request $request)
    {
        return view('player.sendpyment',compact('request'));

    }

}
