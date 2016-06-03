@extends('master')

@section('title', 'Internship details')

@section('content')
    <h2>Details</h2>
    <article>
        <header>
            <h3>{{$stage->contact->company->name}}</h3>
            <ul>
                <li><span>Locatie: </span>{{$stage->contact->company->fullAddress() }}</li>
                <li><span>Telefoon: </span><a href="tel:{{$stage->contact->company->tel}}">{{$stage->contact->company->tel}}</a></li>
                <li><span>Website: </span><a href="http://{{$stage->contact->company->website}}" rel="nofollow">{{$stage->contact->company->website}}</a></li>
                <li><span>Richting: </span>{{$stage->education->cohort->crebo->name}}</li>
                <li><span>Leerweg: </span>{{$stage->education->leerweg}}</li>
            </ul>
        </header>
    </article>
@stop