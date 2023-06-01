<?php

namespace App\Http\Controllers;

use App\Models\Manger;
use App\Models\User;
use App\Models\Coach;
use App\Models\Advice;
use App\Models\Article;
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
        
        public function register(){
            return view('admin.register');
        }
        public function login(){
            return view('admin.login');
        }
        public function login_submit(Request $request)
        {
         
     
   
                $credentials = $request->only('email', 'password');
            
                if (Auth::guard('mangers')->attempt($credentials)) {
                    // تسجيل الدخول الناجح للمستخدم
                    return redirect()->intended('/manger/index');
                } else {
                    // عملية تسجيل الدخول فشلت
                    return back()->withErrors(['email' => 'خطأ في بيانات تسجيل الدخول']);
                }

            
              





        //     $valid=$request->validate([
        //         'email' => 'required|string|email|max:255|unique:users',
        //    'password' => 'required|string|min:8|confirmed',
        //     ]);
            
            // $credentials = $request->only('email', 'password');
    
            // if (Auth::guard('mangers')->attempt($credentials)) {
        
            //     return redirect()->route('admin.index');
            // }
    
          //  return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
        }


}
