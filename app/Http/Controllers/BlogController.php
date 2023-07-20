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

        $posts = Post::query()->orderBy('published_at', 'desc')->paginate(6);
        
        // dd($post->toArray());

        return view('blog.index', compact('posts','categories'));
    }
    // public function show(Request $request,  Post $post)
    public function show(Request $request, $post)
    {
        $post = Post::query()->findOrFail($post, ['id', 'title', 'content']);
         return view('blog.show', compact('post'));
    }
    public function like($post){
        return 'Поставить лайк';
    }
}
