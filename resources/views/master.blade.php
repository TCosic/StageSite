<!doctype html>
<html lang="en">
<head>
    @include('layouts.metadata')
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
</head>
<body>

@include('layouts.header')

<main role="main">
    @yield('content')
</main>

@include('layouts.footer')
{{--<script src="{{ asset('js/all.js') }}"></script>--}}
</body>
</html>