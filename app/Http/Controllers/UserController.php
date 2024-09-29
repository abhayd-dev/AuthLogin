<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }

    public function registerSave(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            
        ]);

       $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
       ]);
       if($user){
        return redirect()->route('login');
       }
       else{
        return redirect()->route( 'register');
       }
    }
  
    public function loginSave(Request $request){
        $data = $request->validate([
           
            'email' => 'required|email',
            'password' => 'required',
            
        ]);

        if(Auth::attempt($data)){
            return redirect()->route('dashboard');
        }else{
            return view('login');
        }
    }

    public function dashboard(){
      
            return view('dashboard');
     
    }
    public function logout(){
      
       Auth::logout();
       return view('login');
     
    }
    
}
