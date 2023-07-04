@extends('layouts.auth')

@section('page.title', 'Sign in')


    @section('auth.content')

        <x-card>
            <x-card-header>
                <x-card-title>
                    {{__('Sign in')}}
                </x-card-title>

                <x-slot name="right">
                    <a href="{{route('login')}}" class="link-secondary">
                        {{__('Login')}}
                    </a>
                </x-slot>
            </x-card-header>

            <x-card-body>
                <x-form action="{{route('register.store')}}" method="POST">

                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <x-form-item class="mb-3">
                        <x-label required>{{__('Name')}}</x-label>
                        <x-input name="name" value="{{request()->old('name')}}"  autofocus/>
                        <x-error name="name"/>
                    </x-form-item>

                    <x-form-item class="mb-3">
                        <x-label required>{{__('Email')}}</x-label>
                        <x-input type="email" name="email" value="{{request()->old('email')}}"  autofocus/>
                        <x-error name="email"/>
                    </x-form-item>

                    <x-form-item class="mb-3">
                        <x-label required>{{__('Password')}}</x-label>
                        <x-input type="password" name="password" />
                        <x-error name="password"/>
                    </x-form-item>

                    <x-form-item class="mb-3">
                        <x-label required>{{__('Repeat new password ')}}</x-label>
                        <x-input type="password" name="password_confirmation" />
                    </x-form-item>

                    <x-form-item class="mb-3">
                        <x-checkbox name="remember">
                            {{__('I agree to the processing of data')}}
                        </x-checkbox>
                        <x-error name="remember"/>
                    </x-form-item>

                    <x-button type="submit" >
                        {{__('Sign in')}}
                    </x-button>
                </x-form>
            </x-card-body>


        </x-card>



@endsection
