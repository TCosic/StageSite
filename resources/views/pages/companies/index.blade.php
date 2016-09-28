@extends('master')

@section('title', 'Internshipcompanies Overview')

@section('content')
    <section class="company-overview">
        <h2>Stagebedrijven overzicht</h2>
        @foreach($companies as $company)
        <article class="internship-item" >
            <header>
                <h3><a href="{{ route('bedrijf.show', $company->id) }}">{{$company->name}}</a></h3>
                <ul>
                    {{--<li><span>Locatie: </span> {{$company->contact->company->fullAddress() }}</li>--}}
                    {{--<li><span>Telefoon: </span> <a href="tel:{{$company->contact->company->tel}}">{{$company->contact->company->tel}}</a></li>--}}
                    {{--<li><span>Website: </span> <a href="http://{{$company->contact->company->website}}" rel="nofollow">{{$company->contact->company->website}}</a></li>--}}
                    {{--<li><span>Richting: </span> {{$company->education->crebo->name}}</li>--}}
                    {{--<li><span>Leerweg: </span> {{$company->education->leerweg}}</li>--}}
                </ul>
            </header>
        </article>
        @endforeach
    </section>
@stop