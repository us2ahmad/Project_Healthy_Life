<?php
namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Player;
use App\Models\Coach;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Mail;

class RegController extends Controller
{
 
    public function check(){
      
        $user = Auth::user()->account_type;
          if($user ==='player'){
            return redirect()->route('player.index');    
            }
        elseif($user === 'coach'){
            return redirect()->route('coach.home');
        }
        elseif($user === 'manger'){
            return redirect()->route('admin.index');
        }
        else{
            return redirect()->route('player.index');
        }
    }
    public function showRegistrationForm()
    {
        return view('auth.reg');
    }
   /**
    * Handle an incoming registration request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\RedirectResponse
    *
    * @throws \Illuminate\Validation\ValidationException
    */
   public function store(Request $request)
   {
       $request->validate([
           'name' => 'required|string|unique:users',
              'first_name' => 'required|string|max:255',
              'last_name' => 'required|string|max:255',
           'gender' => 'required|string',
           'email' => 'required|string|email|max:255|unique:users',
           'photo' => 'required',
            'password' => 'required|string|min:8|confirmed',
           'account_type' => '|string|in:player,coach',
           'height' => 'nullable|numeric|min:0',
           'weight' => 'nullable|numeric|min:0',
           'certificate' => 'nullable',
           'experience' => 'nullable|numeric|min:0',
           'type'=>'required|string'
          
       ]);

       $user = new User();
           $user->name = $request->name;
           $user->first_name = $request->first_name;
           $user->last_name = $request->last_name;
           $user->gender = $request->gender;
           $user->email = $request->email;   
           $user->photo = $request->file('photo')->store('user_photo', 'ahmad');
           $user->password = bcrypt($request->password);
           $user->account_type = $request->account_type;
           $user->save(); // يجب حفظ حساب المستخدم الجديد أولاً
       
       if ($request->account_type === 'player') {
           $player = new Player();
           $player->user_id = $user->id; // تحديد قيمة العمود "user_id"
           $player->height = $request->height;
           $player->level = $request->level;
           $player->weight = $request->weight;
           $player->save();
           Mail::to($user->email)->send(new WelcomeMail ($user->name, 'player', ''));
       } elseif ($request->account_type === 'coach') {
           $coach = new Coach();
           $coach->user_id = $user->id;
           $coach->certificate = $request->file('certificate')->store('certificate','ahmad');
           $coach->experience = $request->experience;
           $coach->type= $request->type;
           $coach->save();
           Mail::to($user->email)->send(new WelcomeMail($user->name, 'coach', ''));
       }
       
       event(new Registered($user));
       
       Auth::login($user);
       
       return redirect(RouteServiceProvider::HOME);
   }
}
