<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($approved)
    {
       $payments=Payment::where('approved',$approved)->get();
         return view('admin.payments',compact('payments'));
    }

    public function accept_payment($id)
    {
        $payment=Payment::where('id',$id)->first();
        $payment->approved='accept';
        $payment->save();
        return redirect()->back()->with('success','Payment accepted');

    }
    public function add_payment(Request $request)
    {
      $payment = new Payment();
      $payment->phone_number= $request->phone_number;
      $payment->id_coache = $request->id_coach;
      $payment->id_player= auth()->user()->player->id;
      $payment->save();
      return response('Done');

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
    public function show(Payment $payment)
    {
        //
    }

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
