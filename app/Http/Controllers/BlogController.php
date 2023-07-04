<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(Request $request)
    {
//////////////////////////////////
//        $validated = $request->validate([
//            'limit' => ['nullable', 'integer', 'min:1', 'max:100'],
//            'page' => ['nullable', 'integer', 'min:1', 'max:100'],
//        ]);
//
//        $limit = $validated['limit'] ?? 12;
//
//
//        $posts = Post::query()->latest('published_at')->paginate($limit);
////////////////////////////////////////////////////////////////////////
//        $posts = Post::query()->latest('published_at')->paginate(12);
//
//        $posts = Post::query()
//            ->where('id', '=', 5 )
//            ->paginate(12);
//
//        $posts = Post::query()
//            ->where('published', true )
//            ->paginate(12);
//
//        $posts = Post::query()
//            ->where('published', true )
//            ->paginate(12);
//////////////////////////////////////////////////////////////


        $validated = $request->validate([
           'search' => ['nullable', 'string', 'max:5'],
           'from_date' => ['nullable', 'string', 'date'],
           'to_date' => ['nullable', 'string', 'date', 'after:from_date'],
        ]);

        $query = Post::query()
            ->where('published', true)
            ->whereNotNull('published_at');

        if ($search = $validated['search']??null) {
            $query->where('title', 'like', "%{$search}%");
        }

        if ($fromDate = $validated['from_date']??null) {
            $query->where('published_at', '>=', new Carbon($fromDate));
        }

        if ($toDate = $validated['to_date']??null) {
            $query->where('published_at', '<=', new Carbon($toDate));
        }

        $posts = $query->latest('published_at')
            ->paginate(12);


//        $posts = Post::query()->when(
//            $validated['search'] ?? null,
//            function (Builder $query, string $search) {
//                $query->where('title', 'like', "%{$search}%");
//            })
//            ->latest('published_at')
//            ->paginate(12);

        return view('blog.index', compact('posts'));
    }

    public function show(Request $request, Post $post) {
/////////////////////////////////////////////////////////
//        $post = cache()->remember(
//            key: "posts.{$post}",
//            ttl: now()->addHour(),
//            callback: function () use($post) {
//                info('test');
//                return Post::query()->findOrFail($post);
//        });
//////////////////////////////////////////////////////////
//        $post = Post::query()->oldest('published_at')->firstOrFail(['title', 'id']);
//
//        dd($post);
//////////////////////////////////////////////////////////
        return view('blog.show', compact('post'));
    }

    public function like() {
        return 'blog like';
    }
}
