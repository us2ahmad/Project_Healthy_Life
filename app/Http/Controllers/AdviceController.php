<?php

namespace App\Http\Controllers;

use App\Models\Advice;
use Illuminate\Http\Request;

class AdviceController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     */
    public function show(Advice $advice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
      $advice=Advice::where('id',$id)->first();
        return view('admin.edit-advice',compact('advice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $request->validate([
            'desc'=>'required|string',
            'photo'=>'required|image',
        ]);
        $advice = Advice::where('id',$id)->first();
        $advice->desc = $request->desc;
        $advice->photo = $request->file('photo')->store('advice','ahmad');
        $advice->save();
        return redirect()->route('admin.show.advices');
        // back()->with('success', 'تم تحديث النصيحة بنجاح!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      $advice=Advice::find($id)->first();
      $advice->delete();
      return redirect()->back()->with('success','Done Deleting');
    }
}
