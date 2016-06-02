@extends('master')

@section('title', 'Internship overview')

@section('content')
    <section>
        <h2>Stageplekken</h2>
        @foreach($stages as $stage)
        <article>
            <header>
                <h3><a href="{{ route('stage.show', $stage->id) }}">{{$stage->contact->company->name}}</a></h3>
                <ul>
                    <li><span>Locatie: </span> {{$stage->contact->company->fullAddress() }}</li>
                    <li><span>Telefoon: </span> <a href="tel:{{$stage->contact->company->tel}}">{{$stage->contact->company->tel}}</a></li>
                    <li><span>Website: </span> <a href="http://{{$stage->contact->company->website}}" rel="nofollow">{{$stage->contact->company->website}}</a></li>
                    <li><span>Richting: </span> {{$stage->education->cohort->crebo->name}}</li>
                    <li><span>Leerweg: </span> {{$stage->education->leerweg}}</li>
                </ul>
            </header>
            <p>{{$stage->description}}</p>
        </article>
        @endforeach
    </section>
@stop