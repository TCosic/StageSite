@extends('master')

@section('title', 'Home')

@section('content')
    <section class="home">
        <article class="flex" >
            <div class="image-container">
                <img src="http://placehold.it/600x400" alt="">
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
                <img src="http://placehold.it/600x400" alt="">
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