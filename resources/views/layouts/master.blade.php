<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet"/>


    <title>CMS ADMIN</title>
</head>

<body>

@if (Auth::check())
    @include('layouts.navbar')
@endif

@yield('content')

</body>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</html>