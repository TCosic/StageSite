@extends('master')

@section('title', 'Create New Tool')

@section('content')
    <section>
        <h2>Create new Tool</h2>
        <article>
            {!! Form::open(['route' => 'tool.store', 'class' => 'horizontal']) !!}

            @include('pages.tools.forms.EditAndCreateForm')

            {!! Form::close() !!}
        </article>
    </section>
@stop