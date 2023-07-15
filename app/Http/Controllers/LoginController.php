<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        // $ip = request()->ip();
        // $path = request()->path();
        // $url = request()->url();
        // $full = request()->fullUrl();

        // dd($ip, $path, $url, $full);

        return view('login.index');
    }
    public function store (Request $request){
        // $ip = request()->ip();
        // $path = request()->path();
        // $url = request()->url();
        // dd($ip, $path, $url);
        // $name = $request->input('email');
        // $email = $request->input('password');
        // $remember = $request->boolean('remember');

        // dd($name, $email, $remember);
        return 'Запрос на вход';
    }
}
