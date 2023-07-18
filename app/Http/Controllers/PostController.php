<?php

namespace App\Http\Controllers;
use App\Http\Requests\Post\StorePostRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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
    // public function store (StorePostRequest $request){
    public function store (Request $request){
        // $validated = $request->validated();

            // $validated = request()->validate([
            //     'title' => ['required', 'string', 'max:100'],
            //     'content' => ['required', 'string'],
            // ]);

        // $validated = validator($request->all(),[
        //     'title' => ['required', 'string', 'max:100'],
        //     'content' => ['required', 'string'],
        // ])->validate();

            // if(true){
            //     throw ValidationException::withMessages([
            //         'account' => __("Недостаточно средств."),
            //     ]);
            // }

        // dd($validated);




        // $data = $request->all();
        // dd($data);
        session(['alert' => __('Сохранено.')]);
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
        session(['alert' => __('Обновлено.')]);
        return redirect()->back();
        
    }
    public function delete ($post){
        return redirect()->route('user.posts');
    }
    public function like ($post){
        return "Лайк + 1";
    }

}
