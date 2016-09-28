@extends('master')

@section('title', 'Create New User')

@section('content')
    <section>
        <h2>Create new User</h2>
        <article>
            {!! Form::open(['route' => 'user.store', 'class' => 'horizontal']) !!}

            @include('pages.users.forms.EditAndCreateForm')

            {!! Form::close() !!}
        </article>
    </section>
@stop