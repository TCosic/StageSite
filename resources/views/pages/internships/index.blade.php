@extends('master')

@section('title', 'Internship overview')

@section('content')
    <h1>Stage Overzicht</h1>
    @foreach($stages as $stage)
        <article>
            <h2><a href="{{ route('stage.show', $stage->id) }}">{{$stage->contact->company->name}}</a></h2>
            <ul>
                <li>Locatie: {{$stage->contact->company->fullAddress() }}</li>
                <li>Telefoon: <a href="tel:{{$stage->contact->company->tel}}">{{$stage->contact->company->tel}}</a></li>
                <li>Website: <a href="http://{{$stage->contact->company->website}}" rel="nofollow">{{$stage->contact->company->website}}</a></li>
                <li>Richting: {{$stage->education->cohort->crebo->name}}</li>
                <li>Leerweg: {{$stage->education->leerweg}}</li>
                <li>Omschrijving: {{$stage->description}}</li>
            </ul>
        </article>
    @endforeach
@stop