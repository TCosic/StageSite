@extends('master')

@section('title', 'Create New Company')

@section('content')
    <section>
        <h2>Create new company</h2>
        <article>
            {!! Form::open(['route' => 'bedrijf.store', 'class' => 'horizontal']) !!}

            @include('pages.companies.forms.EditAndCreateForm')

            {!! Form::close() !!}
        </article>
    </section>
@stop