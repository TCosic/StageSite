@extends('master')

@section('title', 'Edit Internship Details')

@section('content')
    <section>
        <h2>Edit internship</h2>
        <article>
            {!! Form::model($internship, ['route' => ['stage.update', $internship->id], 'method' => 'put', 'class' => 'horizontal']) !!}

            @include('pages.internships.forms.EditAndCreateForm')

            {!! Form::close() !!}
        </article>
    </section>
@stop