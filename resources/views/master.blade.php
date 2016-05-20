<!doctype html>
<html lang="en">
<head>
    @include('layouts.metadata')
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
</head>
<body>

@include('layouts.header')

<div id="main">
    @yield('content')
</div>

@include('layouts.footer')
<script src="{{ asset('js/all.js') }}"></script>
</body>
</html>