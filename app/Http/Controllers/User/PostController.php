<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()->paginate(12);


        return view('user.posts.index', compact('posts'));
    }

    public function create(Request $request)
    {
        return view('user.posts.create');
    }

    public function store(Request $request)
    {
        $validated = validator($request->all(), [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
            'published_at' => ['nullable','string', 'date', 'max:10000'],
            'published' => ['nullable', 'boolean'],
        ])->validate();

        $post = new Post;
        $post->user_id = User::query()->value('id');
        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->published_at = new Carbon($validated['published_at'] ?? null);
        $post->published = $validated['published'] ?? false;
        $post->save();





//        $title = $request->input('title');
//        $content = $request->input('content');
//        dd($title, $content);
        return redirect()->route('user.posts.show', $post->id);
    }

    public function show($post)
    {
        $post = (object) [
            'id' => 1,
            'title' => '1post',
            'content' => 'information about this post'
        ];


        return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {
        $post = (object) [
            'id' => 1,
            'title' => '1post',
            'content' => 'information about this post'
        ];
        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request)
    {
        $validator = validator($request->all(), [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:10000'],
        ])->validate();



//        $title = $request->input('title');
//        $content = $request->input('content');

        return redirect()->back();
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
