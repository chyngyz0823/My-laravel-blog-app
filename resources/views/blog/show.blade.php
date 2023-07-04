@extends('layouts.main')

@section('page.title', $post->title)


@section('main.content')

    <x-title>

        {{$post->title}}

        <x-slot name="link">
            <a href="{{route('blog')}}" class="link-secondary">
                {{__('Back')}}
            </a>
        </x-slot>
    </x-title>

    <div class="text-center">
        {!! $post->content !!}
    </div>





@endsection
