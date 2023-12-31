<?php

namespace App\Http\Controllers;
use App\Http\Requests\Post\StorePostRequest;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function index (){
        $posts = Post::query()->paginate( 6, ['id','title', 'published_at']);

        return view('user.posts.index', compact('posts'));
    }
    public function create (){
        
        return view('user.posts.create');
    }
    // public function store (StorePostRequest $request){
    public function store (Request $request){

        $validated = validator($request->all(),[
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string'],
            'published_at' => ['nullable', 'string', 'date'],
            'published' => ['nullable', 'string', ],
        ])->validate();

        $post = Post::query()->create([
            'user_id' => User::query()->value('id'),
            'title' => $validated['title'],
            'content' => $validated['content'],
            'published_at' => new Carbon($validated['published_at'] ?? null),
            'published' => $validated['published'] ?? false,
        ]);

        dd($post->toArray());

        // $data = $request->all();
        // dd($data);
        session(['alert' => __('Сохранено.')]);
        return redirect()->route('user.posts.show', 123);
    }
    public function show (Request $request, $post){ 
        
        $post = Post::query()->findOrFail($post, ['id', 'title', 'published_at', 'content']);
        return  view('user.posts.show', compact('post'));
    }
    public function edit (Request $request, Post $post){
        
        return view('user.posts.edit', compact('post'));
    }
    public function update (Request $request, $post){
        // $data = $request->all();
        // dd($data);
        session(['alert' => __('Обновлено.')]);
        return redirect()->route('user.posts.show', $post);
        // return redirect()->back();
    }
    public function delete ($post){
        return redirect()->route('user.posts');
    }
    public function like ($post){
        return "Лайк + 1";
    }

}
