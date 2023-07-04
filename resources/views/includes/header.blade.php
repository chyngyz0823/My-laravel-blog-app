{{--<header class="py-3 border-bottom">--}}

{{--    <div class="container">--}}

{{--        <div class="d-flex justify-content-between">--}}

{{--            <div>--}}

{{--                <ul class="list-unstyled d-flex">--}}
{{--                    <li class="me-3">--}}
{{--                        <a href="{{route('home')}}">--}}
{{--                            {{config('app.name')}}--}}
{{--                        </a>--}}
{{--                    </li>--}}

{{--                    <li class="me-3">--}}
{{--                        <a href="{{route('blog')}}">Posts</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--            </div>--}}

{{--            <div>--}}
{{--                <ul class="list-unstyled d-flex">--}}
{{--                    <li class="ms-3">--}}
{{--                        <a href="{{route('register')}}">Sign in</a>--}}
{{--                    </li>--}}

{{--                    <li class="ms-3">--}}
{{--                        <a href="{{route('login')}}">Login</a>--}}
{{--                    </li>--}}

{{--                </ul>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}


{{--</header>--}}


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            {{config('app.name')}}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-md-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">
                        {{__('Home')}}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog')}}">
                        {{__('Blogs')}}
                    </a>
                </li>

            </ul>

            <ul class="navbar-nav ms-auto my-2 my-md-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('register')}}">
                        {{__('Sign in')}}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">
                        {{__('Login')}}
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
