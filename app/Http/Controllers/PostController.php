<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index (){
        return 'Страница список постов';
    }
    public function create (){
        return 'Страница создание поста';
    }
    public function store (){
        return 'Запрос создание поста';
    }
    public function show ($post){
        return "Страница просмотр поста {$post}";
    }
    public function edit (){
        return 'Страница изменение поста';
    }
    public function update (){
        return 'Запрос изменение поста';
    }
    public function delete (){
        return 'Запрос удаление поста';
    }
    public function like ($post){
        return "Лайк + 1";
    }

}
