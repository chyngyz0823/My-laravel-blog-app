@extends('layouts.main')

@section('page.title', 'Edit post')


@section('main.content')

    <x-title>
        {{__('Edit post')}}

        <x-slot name="link">
            <a href="{{route('user.posts.show', $post->id)}}" class="link-secondary">
                {{__('Posts')}}
            </a>
        </x-slot>
    </x-title>

    <x-form action="{{route('user.posts.update', $post->id)}}" method="POST">
        @method('PUT')

        <x-form-item>
            <x-label required>{{__('Posts name')}}</x-label>
            <x-input name="title" value="{{$post->title ?? ''}}" autofocus/>
            <x-error name="title"/>
        </x-form-item>

        <x-form-item>
            <x-label required>{{__('Description')}}</x-label>
            <x-textarea name="content" rows="10" value="{{$post->content ?? ''}}"/>
            <x-error name="content"/>
        </x-form-item>

        <x-button type="submit">
            {{__('Edit')}}
        </x-button>
    </x-form>



@endsection
