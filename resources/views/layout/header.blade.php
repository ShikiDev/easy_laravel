<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="flex-center position-ref full-height">
    <header class="border-bottom box-shadow">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Home</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="content">
            <div class="container mt-2">
                @yield('content')
            </div>
        </div>
    </main>
</div>
</body>
</html>
