<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('Main');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('Main');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }
    public function regis(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:users', 'max:255'],
            'password' => ['required', 'string'],
        ]);
        
            LoginController::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' =>($request['password']),
        ]);

        return to_route('login');
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function showRegister(){
        return view('register');
    }
}