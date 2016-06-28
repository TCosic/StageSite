@extends('master')

@section('title', 'Internships overview')

@section('content')
    <div class="search">
        {!! Form::open(['route' => 'stage.search', 'class' => 'horizontal']) !!}
        <div>
            {!! Form::label('company_name', 'Bedrijfsnaam:') !!}
            {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
        </div>
        <div>
            {!! Form::label('education', 'Opleiding:') !!}
            {!! Form::select('education', $educations, null, ['class' => 'form-control']) !!}
        </div>
        <div>
            {!! Form::label('radius', 'In een straal van: ') !!}
            {!! Form::select('radius', $radius, null, ['class' => 'form-controll']) !!}
        </div>
        <div>
            {!! Form::label('city', 'Rond: ' ) !!}
            {!! Form::text('city', null, ['class' => 'form-control']) !!}
        </div>
        <div>
            {!! Form::submit('Zoeken', ['class' => 'button green']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <section>
        <h2>Stageplekken overzicht</h2><a href="{{route('stage.create')}}" class="button green">Create</a>
        @foreach($internships as $internship)
        <article class="internship-item" >
            <header>
                <h3><a href="{{ route('stage.show', $internship->id) }}">{{$internship->contact->company->name}}</a></h3>
                <ul>
                    <li><span>Locatie: </span> {{$internship->contact->company->fullAddress() }}</li>
                    <li><span>Telefoon: </span> <a href="tel:{{$internship->contact->company->tel}}">{{$internship->contact->company->tel}}</a></li>
                    <li><span>Website: </span> <a href="http://{{$internship->contact->company->website}}" rel="nofollow">{{$internship->contact->company->website}}</a></li>
                    <li><span>Richting: </span> {{$internship->education->crebo->name}}</li>
                    <li><span>Leerweg: </span> {{$internship->education->leerweg}}</li>
                </ul>
                <div class="hoverShow">
                    <a href="{{ route('stage.destroy', $internship->id) }}" data-token="{{ csrf_token() }}" class="delete">Verwijderen</a>
                    <a href="{{ route('stage.edit', $internship->id) }}">Wijzig</a>
                </div>
            </header>
        </article>
        @endforeach
    </section>
@stop