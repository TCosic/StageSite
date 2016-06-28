@extends('master')

@section('title', 'Create New Internship')

@section('content')
    <section>
        <h2>Create new internship</h2>
        <article>
            {!! Form::open(['route' => 'stage.store', 'class' => 'horizontal']) !!}

            @include('pages.internships.forms.EditAndCreateForm')

            {!! Form::close() !!}
        </article>
    </section>
@stop