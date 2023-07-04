@extends('layouts.main')

@section('page.title', 'Show post')


@section('main.content')

    <x-title>
        {{__('Show post')}}
        <x-slot name="link">
            <a href="{{route('user.posts')}}" class="link-secondary">
                {{__('Posts')}}
            </a>
        </x-slot>
        <x-slot name="right">
            <x-button-link href="{{route('user.posts.edit', $post->id)}}">
                {{__('Update')}}
            </x-button-link>
        </x-slot>
    </x-title>



        <h2 class="h4">

                {{$post->title}}

        </h2>

        <div class="small text-muted">
            {{now()->format('d.m.Y H:i:s')}}
        </div>

        <div class="pt-4">
            {{$post->content}}
        </div>




@endsection
