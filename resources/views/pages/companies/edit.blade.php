@extends('master')

@section('title', 'Edit Company Details')

@section('content')
    <section>
        <h2>Edit company</h2>
        <article>
            {!! Form::model($company, ['route' => ['bedrijf.update', $company->id], 'method' => 'put', 'class' => 'horizontal']) !!}

            @include('pages.companies.forms.EditAndCreateForm')

            {!! Form::close() !!}
        </article>
    </section>
@stop