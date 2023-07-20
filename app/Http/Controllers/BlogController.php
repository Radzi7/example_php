<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request){

        $categories = [
            null =>__('Все категории'),
            1 => __('Первая категория'),
            2 => __('Вторая категория'),
        ];

        $posts = Post::query()->orderBy('published_at', 'desc')->paginate(6);

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
