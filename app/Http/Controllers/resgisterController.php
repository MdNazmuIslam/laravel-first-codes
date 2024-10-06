<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class resgisterController extends Controller
{
    public function login(){
        return view('Pages/user/login');
    }
    public function resgister(){
        return view('Pages/user/resgister');
    }
    public function resgistersave( Request $request, user $user) {
        $request->validate([
            'name'=>"required | string| max:30",
            'email'=>"required |string | max:56| email|unique:users".$user->id,
            'password'=>"required |min:6 | max:30",
            'confiram_passwrod'=>"required_with:password|same:password|min:6| max:30",
        ]);

        $save = user::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
           
        ]);
        if( $save){
            return redirect()->route('login')->with('msg',"Resgistion complete. please login");
        }else{
            return redirect()->route('register')->with('failed',"Resgistion not completed please try again");
        }
    }

    public function loginConfirm( Request $request) {
        $request->validate([
           'email'=>"required |string | max:56| email",
            'password'=>"required |min:6 | max:30"
        ]);

        
        $credentials = $request->only("email","password");
      if(Auth::attempt($credentials )) {

        return redirect('dashboard')->with('status', 'Login successfully');

        }else{
            return redirect('login')->with('failed', 'Login failed');
        }
    }

    public function dashboardPage(){
            return view('Pages/user/dashboard')->with('status', 'Welcome');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }

}
