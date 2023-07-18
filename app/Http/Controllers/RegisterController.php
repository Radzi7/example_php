<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }
    public function store (Request $request){
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:50', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:7', 'max:50', 'confirmed'],
            'agreement' => ['accepted'],  
        ]);
        // dd($validated);
        
        // 1ый метод
        // $user = new User;
        // $user->name = $validated['name'];
        // $user->email = $validated['email'];
        // $user->password = bcrypt($validated['password']);
        // $user->save();

        // 2ой метод
        //   User::create([
        //     'name' => $validated['name'],
        //     'email' => $validated['email'],
        //     'password' => bcrypt($validated['password']),
        // ]);
            // dd($user);
        // 3ий метод статично
            // $user = new User();
            // $user->fill(['name' => $validated['name']]); // first
            // $user->setAttribute('email',  $validated['email']); // second
            // $user->password = bcrypt($validated['password']); // third
            // $user->save();
        // dd($user);

        return redirect()->route('user.posts');
    }
}
