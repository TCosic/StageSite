@extends('master')

@section('title', 'Home')

@section('content')
    <section class="home">
        @if(Auth::check())
            @if(Auth::user()->role_id == 1)
                <li><a href="{{ route('admin.account.index') }}">user is logged in</a></li>
            @endif
        @endif

        <article class="flex" >
            <div class="image-container">
                <img src="{{asset('img/placehold.it_600x400.png')}}" alt="">
            </div>
            <div>
                <h2>Overview</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dignissimos
                    expedita fugiat inventore, magni molestiae natus nobis odit, officiis,
                    quam sed sit veniam voluptatem? Ad mollitia necessitatibus quas sit veniam.
                </p>
            </div>
        </article>
        <article class="flex-reverse" >
            <div class="image-container">
                <img src="{{asset('img/placehold.it_600x400.png')}}" alt="">
            </div>
            <div>
                <h2>Overview</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dignissimos
                    expedita fugiat inventore, magni molestiae natus nobis odit, officiis,
                    quam sed sit veniam voluptatem? Ad mollitia necessitatibus quas sit veniam.
                </p>
            </div>
        </article>
    </section>

@stop