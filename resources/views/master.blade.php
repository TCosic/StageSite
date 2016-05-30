<!doctype html>
<html lang="en">
<head>
    @include('layouts.metadata')
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
</head>
<body>

@include('layouts.header')

<main role="main">
    @yield('content')
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dignissimos expedita fugiat inventore, magni molestiae natus nobis odit, officiis, quam sed sit veniam voluptatem? Ad mollitia necessitatibus quas sit veniam.</p>
</main>

@include('layouts.footer')
{{--<script src="{{ asset('js/all.js') }}"></script>--}}
</body>
</html>