@extends('master')

@section('title', 'Internshipcompanies Overview')

@section('content')
    <section>
        <h2>Stagebedrijven overzicht</h2>
        <a href="{{route('bedrijf.create')}}" class="button green">Create</a>
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
                <div class="hoverShow">
                <a href="{{ route('bedrijf.destroy', $company->id) }}" data-token="{{ csrf_token() }}" class="delete">Verwijderen</a>
                <a href="{{ route('bedrijf.edit', $company->id) }}">Wijzig</a>
                </div>
            </header>
        </article>
        @endforeach
    </section>
@stop