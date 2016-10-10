@extends('master')

@section('title', 'Edit Tool Details')

@section('content')
    <section>
        <h2>Edit Tool</h2>
        <article>
            {!! Form::model($tool, ['route' => ['tool.update', $tool->id], 'method' => 'put', 'class' => 'horizontal']) !!}

            @include('pages.tools.forms.EditAndCreateForm')

            {!! Form::close() !!}
        </article>
    </section>
@stop