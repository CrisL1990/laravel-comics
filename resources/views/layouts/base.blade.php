<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('pageTitle')</title>
</head>
<body>
    
    @include('partials.header')
    @include('partials.jumbotron')

    <main>
        @yield('content')
    </main>

    
    @include('partials.footerCenter')
    @include('partials.footerBottom')
    
</body>
</html>