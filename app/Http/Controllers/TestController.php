<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class TestController extends Controller
{
    // routery v kontroller
    // public function     __constructor(){
    //     $this->middleware('token')->only('index');
    //     $this->middleware('token2')->except('store');
    // }
    public function __invoke(){
        return 'Test';
    }
}
