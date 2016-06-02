@extends('master')

@section('title', 'Internship details')

@section('content')
    <h1>Details</h1>
    <article>
        <h2>{{$stage->contact->company->name}}</h2>
        <ul>
            <li>Locatie: {{$stage->contact->company->fullAddress() }}</li>
            <li>Telefoon: <a href="tel:{{$stage->contact->company->tel}}">{{$stage->contact->company->tel}}</a></li>
            <li>Website: <a href="http://{{$stage->contact->company->website}}" rel="nofollow">{{$stage->contact->company->website}}</a></li>
            <li>Richting: {{$stage->education->cohort->crebo->name}}</li>
            <li>Leerweg: {{$stage->education->leerweg}}</li>
            <li>Omschrijving: {{$stage->description}}</li>
        </ul>
    </article>
@stop