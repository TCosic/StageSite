@extends('master')

@section('title', 'Internship overview')

@section('content')
    <div class="search">

        <form method="POST" action="{{route('contact.search')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
                <label for="company">Bedrijfsnaam: </label>
                <input id="company" type="text" name="company_name">
            </div>
            <div>
                <label for="education">Opleiding: </label>
                <select name="education" id="education">
                    <option value="bla">bla</option>
                    <option value="bla">bla</option>
                    <option value="bla">bla</option>
                    <option value="bla">bla</option>
                    <option value="bla">bla</option>
                </select>
            </div>
            <div>
                <label for="straal">In een straal van: </label>
                <select name="straal" id="straal">
                    <option value="1">1 km</option>
                    <option value="2">2 km</option>
                    <option value="5">5 km</option>
                    <option value="10">10 km</option>
                    <option value="15">15 km</option>
                </select>
            </div>
            <div>
                <label for="city">Rond: </label>
                <input id="city" type="text" name="city" >
            </div>
            <div>
                <label for="extra">Een extra optie</label>
                <input type="checkbox" name="extra" value="bla">
            </div>
            <div>
                <input type="submit" class="button">
            </div>



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