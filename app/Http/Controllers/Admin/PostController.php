<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    //

    public function index()
    {
        return 'Страница список постов';
    }

    public function create()
    {
        return 'создание поста';
    }

    public function store()
    {
        return 'сохранение';
    }

    public function show($post)
    {
        return "показать пост $post";
    }

    public function edit()
    {
        return "страница исправления";
    }

    public function update()
    {
        return "обновить пост";
    }

    public function delete()
    {
        return "удалить пост";
    }

    public function like()
    {
        return "счетчик лайков";
    }
}
