@extends('master')

@section('title', 'Internship overview')

@section('content')
    <div class="search">
        {!! Form::open(['route' => 'stage.search']) !!}
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



        </form>
    </div>
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
        </article>
        @endforeach
    </section>
@stop