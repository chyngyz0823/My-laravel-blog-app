@extends('layouts.main')

@section('page.title', 'Posts')


@section('main.content')

    <x-title>
        {{__('My posts')}}
        <x-slot name="right">
            <x-button-link href="{{route('user.posts.create')}}">
                {{__('Create')}}
            </x-button-link>
        </x-slot>

    </x-title>




    @if(empty($posts))
        <div class="text-center">
            {{__('No posts')}}
        </div>
    @else

            @foreach($posts as $post)

                <div class="mb-5">
                    <h2 class="h6">
                        <a href="{{route('user.posts.show', $post->id)}}">
                            {{$post->title}}
                        </a>
                    </h2>

                    <div class="small text-muted">
                        {{$post->published_at->format('d.m.Y H:i:s')}}
                    </div>
                </div>

            @endforeach

        {{$posts->links()}}

    @endif




@endsection
