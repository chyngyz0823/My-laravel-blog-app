@extends('layouts.main')

@section('page.title', 'Create post')


@section('main.content')

    <x-title>
        {{__('Create post')}}

        <x-slot name="link">
            <a href="{{route('user.posts')}}" class="link-secondary">
                {{__('Posts')}}
            </a>
        </x-slot>
    </x-title>





    <x-form action="{{route('user.posts.store')}}" method="POST">

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <x-form-item>
            <x-label required>{{__('Posts name')}}</x-label>
            <x-input name="title" autofocus/>
            <x-error name="title"/>
        </x-form-item>

        <x-form-item>
            <x-label required>{{__('Description')}}</x-label>
            <x-textarea name="content" rows="10"/>
            <x-error name="content"/>
        </x-form-item>

        <x-form-item>
            <x-label required>{{__('Publication date')}}</x-label>
            <x-input name="published_at" placeholder="dd.mm.yyy"/>
            <x-error name="published_at"/>
        </x-form-item>

        <x-form-item>
            <x-checkbox name="published">
                {{__('Published')}}
            </x-checkbox>
        </x-form-item>

        <x-button type="submit">
            {{__('Create post')}}
        </x-button>
    </x-form>



@endsection
