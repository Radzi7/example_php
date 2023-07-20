<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request){
        $search =$request->input('search'); 
        $category_id = $request->input('category_id');
        // dd($search, $category_id);

        // $post = (object)[
        //     'id'=> 123,
        //     'title'=> "Lorem ipsum dolor sit amet.",
        //     'content'=>'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Exercitationem, placeat?',
        //     'category_id'=> 1,
        // ];
        // $posts = array_fill(0,10,$post);
        // $posts = array_filter($posts, function($post) use ($search, $category_id){
        //     if ($search && !str_contains(strtolower(($post)->title), strtolower($search))){
        //         return false;
        //     }
        //     if ($category_id && $post->category_id != $category_id){
        //         return false;
        //     }
        //     return true;
        // });

        $categories = [
            null =>__('Все категории'),
            1 => __('Первая категория'),
            2 => __('Вторая категория'),
        ];
        $validated = $request->validate([
            'limit' => ['nullable', 'integer', 'min:1', 'max:100'],
            'page' => ['nullable', 'integer', 'min:1', 'max:100'],
        ]);

        // $page = $validated['page'] ?? 1;
        $limit = $validated['limit'] ?? 6;
        // $offset = $limit * ($page - 1);

        // $posts = Post::all(['id','title', 'published_at']);
        // $posts = Post::query()->limit($limit)->offset($offset)->get(['id','title', 'published_at']);
        // $posts = Post::query()->latest('published_at')->paginate($limit);
        // $posts = Post::query()->oldest('published_at')->paginate($limit);
        $posts = Post::query()->orderBy('published_at', 'desc')->paginate( $limit, ['id','title', 'published_at']);
        
        // dd($post->toArray());

        return view('blog.index', compact('posts','categories'));
    }
    public function show($post)
    {
        $post = (object)[
            'id'=> 123,
            'title'=> "Lorem ipsum dolor sit amet.",
            'content'=>'Lorem ipsum <strong>dolor</strong> sit amet consectetur adipisicing elit. Exercitationem, placeat?'
        ];
         return view('blog.show', compact('post'));
    }
    public function like($post){
        return 'Поставить лайк';
    }
}
