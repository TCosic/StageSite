@extends('master')

@section('title', 'Internship details')

@section('content')
    <section>
        <h2>Stageplek details</h2>
        <a href="{{ route('stage.edit', $internship->id) }}" class="button green">Edit</a>
        <a href="{{ route('stage.destroy', $internship->id) }}" data-token="{{ csrf_token() }}" class="delete button green" >Delete</a>
        <article>
            <header>
                <h3>{{$internship->contact->company->name}}</h3>

                @if(Auth::check())
                    @if(Auth::user()->role_id == 1)
                        @include('pages.internships.forms.Rating')
                    @endif
                @endif

                <ul>
                    <li><span>Locatie: </span> {{$internship->contact->company->fullAddress() }}</li>
                    <li><span>Telefoon: </span> <a href="tel:{{$internship->contact->company->tel}}">{{$internship->contact->company->tel}}</a></li>
                    <li><span>Website: </span> <a href="http://{{$internship->contact->company->website}}" rel="nofollow">{{$internship->contact->company->website}}</a></li>
                    <li><span>Richting: </span> {{$internship->education->crebo->name}}</li>
                    <li><span>Leerweg: </span> {{$internship->education->leerweg}}</li>
                </ul>
            </header>
            <p>{{$internship->description}}</p>

            <section id="comments">
            @if(Auth::check())
                @if(Auth::user()->role_id == 1)
                    {{--Comment plaatsen--}}
                    {{--{!! Form::open(['route' => 'stage.comment', 'class' => 'comment']) !!}--}}
                        {{--<div class="input-fields">--}}
                            {{--{!! Form::label('content', 'Inhoud') !!}--}}
                            {{--{{ Form::textarea('content') }}--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--{!! Form::submit('submit', ['class' => 'button']) !!}--}}
                        {{--</div>--}}
                    {{--{!! Form::close() !!}--}}
                @endif
            @endif
            </section>
        </article>
    </section>
@stop