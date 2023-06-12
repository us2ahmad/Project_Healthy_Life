<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Traits\QueryTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    use QueryTrait;
    /**
     * Display a listing of the resource.
     */
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
          
       
       
       DB::table('player_training_plans')->insert([
        'status' => 'active',
        'id_player' => $id_player,
        'id_training_plan' => $trid,
        // 'created_at' => now(),
        // 'updated_at' => now(),
    ]);
    // return response('Done');
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
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    

    }
  public function show(Request $request)
    {

        dd($request );
        // return view('player.sendpyment',compact('request'));

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
 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
