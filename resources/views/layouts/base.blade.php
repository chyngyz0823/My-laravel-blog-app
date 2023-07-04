<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page.title', 'Laravel')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 1080px;
        }
        .required:after {
            content: '*';
            color: red;
            margin-left: 3px;
        }
    </style>
</head>
<body>

<div class="d-flex flex-column justify-content-between" style="min-height:100vh">
    @include('includes.header')



    <main class="flex-grow-1 py-3">
        @yield('content')
    </main>



    @include('includes.footer')
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
