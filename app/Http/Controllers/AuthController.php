<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    public function show_signup(){
        return view('signup');
    }

    public function signup(Request $request){
        $request->validate([
            'FIO' => 'required|string',
            'login' => 'required|string|unique:users',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6',
            'phone' => 'required|numeric|digits:13',
            
        ]);
    
        User::create(['FIO' => $request->FIO,'login' => $request->login,'email' => $request->email,'password' => Hash::make($request->password),'phone' => $request->phone,'role' => 'Пользователь']);
         
        return redirect()->route('show_signin');
    }

    public function show_signin(){
        return view('signin');
    }

    public function signin(Request $request){
        $request->validate([
            'login' =>'required|string', 
            'password'=>'required|string|min:6',
        ]);

        if(Auth::attempt(['login'=>$request->login, 'password'=>$request->password, 'phone'=>$request->phone])){
            $user->User::all();
            if($user->role=='Админ'){
                return redirect()->route('admin');
            }else {
                return redirect()->route('user');

            }
        }
         
        return redirect()->route('signin');
    }

        public function admin(){
            return view('admin');
        }

        public function user(){
            return view('user');
        }

}
