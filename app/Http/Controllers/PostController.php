<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index (){
        $post = (object)[
            'id'=> 123,
            'title'=> "Lorem ipsum dolor sit amet.",
            'content'=>'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Exercitationem, placeat?'
        ];
        $posts = array_fill(0,10,$post);
        return view('user.posts.index', compact('posts'));
    }
    public function create (){
        
        return view('user.posts.create');
    }
    public function store (Request $request){
        // $data = $request->all();
        // dd($data);
        return redirect()->route('user.posts.show', 123);
    }
    public function show ($post){
        $post = (object)[
            'id'=> 123,
            'title'=> "Lorem ipsum dolor sit amet.",
            'content'=>'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Exercitationem, placeat?'
        ];
        return  view('user.posts.show', compact('post'));
    }
    public function edit ($post){
        $post = (object)[
            'id'=> 123,
            'title'=> "Lorem ipsum dolor sit amet.",
            'content'=>'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Exercitationem, placeat?'
        ];
        return view('user.posts.edit', compact('post'));
    }
    public function update (Request $request, $post){
        // $data = $request->all();
        // dd($data);
        // return redirect()->route('user.posts.show', $post);
        return redirect()->back();
        
    }
    public function delete ($post){
        return redirect()->route('user.posts');
    }
    public function like ($post){
        return "Лайк + 1";
    }

}
