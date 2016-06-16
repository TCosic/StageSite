@extends('master')

@section('title', 'Internship details')

@section('content')
    <section>
        <h2>Create</h2>
        <article>
            {!! Form::open(['route' => 'stage.store', 'class' => 'horizontal']) !!}
            <div class="input-fields">
                {!! Form::label('education_id', 'studie') !!}
                {!! Form::select('education_id', $educations) !!}
                <a href="#">add new education</a>
            </div>
            <div class="input-fields">
                {!! Form::label('start_date', 'Start datum') !!}
                {!! Form::date('start_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
            </div>
            <div class="input-fields">
                {!! Form::label('end_date', 'Eind datum') !!}
                {!! Form::date('end_date', \Carbon\Carbon::now()->addMonths(2), ['class' => 'form-control']) !!}

            </div>
            <div class="input-fields">
                {!! Form::label('description', 'Beschrijving') !!}
                {{ Form::textarea('description') }}
            </div>
            <div class="input-fields">
                {!! Form::label('status_id', 'Status') !!}
                {!! Form::select('status_id', $statusses) !!}
            </div>
            <div>
                {!! Form::submit('submit', ['class' => 'button']) !!}
            </div>

            {!! Form::close() !!}
        </article>
    </section>
@stop