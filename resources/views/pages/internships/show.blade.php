@extends('master')

@section('title', 'Internship details')

@section('content')
    <section>
        <h2>Details</h2>
        <article>
            <header>
                <h3>{{$internship->contact->company->name}}</h3>
                <ul>
                    <li><span>Locatie: </span> {{$internship->contact->company->fullAddress() }}</li>
                    <li><span>Telefoon: </span> <a href="tel:{{$internship->contact->company->tel}}">{{$internship->contact->company->tel}}</a></li>
                    <li><span>Website: </span> <a href="http://{{$internship->contact->company->website}}" rel="nofollow">{{$internship->contact->company->website}}</a></li>
                    <li><span>Richting: </span> {{$internship->education->cohort->crebo->name}}</li>
                    <li><span>Leerweg: </span> {{$internship->education->leerweg}}</li>
                </ul>
            </header>
            <p>{{$internship->description}}</p>
        </article>
    </section>
@stop