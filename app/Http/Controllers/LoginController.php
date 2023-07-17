<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        // dd(session()->all());
        // $foo = session()->get('foo');
        // $name = session()->get('name');
        // dd(session()->has('foo'));
        // dd($foo,$name);
        return view('login.index');
    }
    public function store (Request $request){
        
        // session()->put('foo', 'bar');
        // session([
        //     'foo'=>'bar',
        //     'name'=>'eagle',
        // ]);
        // session()->forget('alert');
        // session()->flush();
        session(['alert' => __('Добро пожаловать !')]);
            // alert(__('Добро пожаловать !'));
        // return redirect()->back()->withInput();
        return redirect()->route('user.posts');
    }
}
