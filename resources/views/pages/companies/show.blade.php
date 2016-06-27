@extends('master')

@section('title', 'Company Details')

@section('content')
    <section>
        <h2>Bedrijfs Details</h2>
        <article>
            <header>
                <h3>{{$company->name}}</h3>
                <ul>
                    <li><span>Locatie: </span> {{$company->fullAddress() }}</li>
                    <li><span>Telefoon: </span> <a href="tel:{{$company->tel}}">{{$company->tel}}</a></li>
                    <li><span>Website: </span> <a href="http://{{$company->website}}" rel="nofollow">{{$company->website}}</a></li>
                </ul>
            </header>
        </article>
    </section>
@stop