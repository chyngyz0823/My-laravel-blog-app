@extends('layouts.main')

@section('page.title', 'Posts')


@section('main.content')

    <x-title>
        {{__('Post list')}}
    </x-title>


    <x-form action="{{route('blog')}}" method="GET">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    <x-input name="search" value="{{request()->input('search')}}" placeholder="{{__('Search')}}" />
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    <x-input name="from_date" value="{{request()->input('from_date')}}" placeholder="{{__('From Date')}}" />
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="mb-3">
                    <x-input name="to_date" value="{{request()->input('to_date')}}" placeholder="{{__('To Date')}}" />
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="mb-3">
                    <x-button type="submit" class="w-100">
                        {{__('Submit')}}
                    </x-button>
                </div>
            </div>
        </div>
    </x-form>




    @if($posts->isEmpty())
        <div class="text-center">
            {{__('No posts')}}
        </div>
    @else
        <div class="row">
            @foreach($posts as $post)
                <div class="col-12 col-md-4">
                    <x-card>
                        <x-card-body>
                            <div class="mb-4">
                                <h2 class="h5">
                                    <a href="{{route('blog.show', $post->id)}}">{{$post->title}}</a>
                                </h2>

                                <p>
                                    {{$post->published_at->diffForHumans()}}
                                </p>
                            </div>
                        </x-card-body>
                    </x-card>
                </div>
            @endforeach
        </div>

        {{ $posts->links() }}

    @endif




@endsection
